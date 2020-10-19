<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class PagesController extends AppController
{
    
    public $paginate = [
        'order' => [
            'posts.id' => 'DESC'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }

    // 0. Home - Just Layout
    public function home()
    {
        $this->viewBuilder()->setLayout('guests');

    }

    public function tdco()
    {
        $this->viewBuilder()->setLayout('tdco');

    }

    // 1.0 Blog Page
    public function blog()
    {
        $this->viewBuilder()->setLayout('guests');
        
        $posts = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users'], 'conditions' => ['status' => 2], 'order' => ['posts.id' => 'DESC'], 'limit' => 10])->all();
        
        $this->set(compact('posts'));
    }

    // 1.1 Category Blog Page
    public function category($cat = null)
    {
        $this->viewBuilder()->setLayout('guests');

        $posts = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users'], 'conditions' => ['status' => 2, 'Categories.slug' => $cat], 'order' => ['posts.id' => 'DESC']])->all();

        $this->set(compact('posts','cat'));
    }

    // 1.2 Individual Post
    public function post($slug = null)
    {
        $this->viewBuilder()->setLayout('posts');

        $post = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users'],'conditions' => ['posts.slug' => $slug]])->first();

        $this->set(compact('post'));
    }

    // 2.0 Webstudio Page
    public function webstudio()
    {
        $this->viewBuilder()->setLayout('guests');

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $email = $data['email'];
            $client = $this->checkClient($email);
            // If the email isn't found we create the register
            if (!$client) {
                $getted = $this->createClientJustEmail($email);
            }

            if ($getted) {
                $this->Flash->success(__('¡Ya recibimos tu email! Pronto te contactaremos 😊'));
            } else {
                $this->Flash->error(__('¡Hubo un error! Intenta más tarde 😢'));
            }
        }
    }

    // 3.0 About Page
    public function about()
    {
        $this->viewBuilder()->setLayout('guests');

    }

    // 4.0 Cases of Study
    public function casesOfStudy()
    {
        $this->viewBuilder()->setLayout('guests');

    }

    // 5.0 Contact Page
    public function contact()
    {
        $this->viewBuilder()->setLayout('guests');

        $cities = TableRegistry::get('cities')->find('list', ['order' => ['name' => 'ASC']]);
        $campaigns = TableRegistry::get('campaigns')->find('list', ['keyField' => 'id', 'valueField' => 'display'])->order(['display' => 'ASC']);

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $email = $data['email'];
            $client = $this->checkClient($email);
            // If the email isn't found we create the register
            if (!$client) {
                $getted = $this->messageCreateAll($data);
            } else {
                $getted = $this->messageCreateMessage($data, $client);
            }

            if ($getted) {
                $this->Flash->success(__('¡El mensaje fue enviado! Pronto te contactaremos 😊'));
            } else {
                $this->Flash->error(__('¡Hubo un error! Intenta más tarde 😢'));
            }
        }

        $this->set(compact('cities','campaigns'));
    }


    private function checkClient($email)
    {
        $client = TableRegistry::get('clients')->find('all', ['conditions' => ['email' => $email]])->all();

        if (!$client->isEmpty()) {
            return $client->id;
        } else {
            return false;
        }
    }

    private function messageCreateAll($data)
    {
        $conn = ConnectionManager::get('default');
        $conn->begin();
        // Tasks
        $business = $this->createBusiness($data['project']);
        $client = $this->createClient($data, $business);
        $campaignUpdate = $this->updateCampaign($data['campaign_id']);
        $message = $this->createMessage($data['message'], $client);

        if (empty((array)$business) || empty((array)$client) || !$campaignUpdate || !$message) {
            $conn->rollback();
            return false;
        } else {
            $conn->commit();
            return true;
        }
    }

    private function messageCreateMessage($data, $client)
    {
        $conn = ConnectionManager::get('default');
        $conn->begin();
        // Tasks
        $campaignUpdate = $this->updateCampaign($data['campaign_id']);
        $message = $this->createMessage($data['message'], $client);

        if (!$campaignUpdate || !$message) {
            $conn->rollback();
            return false;
        } else {
            $conn->commit();
            return true;
        }
    }

    private function createBusiness($name)
    {
        $businesses = TableRegistry::get('businesses');
        $query = $businesses->query();
        $query->insert(['name'])->values(['name' => $name])->execute();

        return $businesses->find('all')->order(['id' => 'DESC'])->limit(1)->first();
    }

    private function createClient($data, $business)
    {
        $clients = TableRegistry::get('clients');
        $query = $clients->query();
        $query->insert(['city_id','business_id','campaign_id','name','email'])
        ->values([
            'city_id' => $data['city_id'],
            'business_id' => $business->id,
            'campaign_id' => $data['campaign_id'],
            'name' => $data['name'],
            'email' => $data['email']
        ])->execute();

        return $clients->find('all')->order(['id' => 'DESC'])->limit(1)->first();
    }

    private function createClientJustEmail($email)
    {
        $clients = TableRegistry::get('clients');
        $query = $clients->query();
        $query->insert(['email'])
        ->values([
            'email' => $email
        ]);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }

    }

    private function updateCampaign($id)
    {
        $campaigns = TableRegistry::get('campaigns');
        // GET CAMPAIGN
        $counter = $campaigns->find('all', ['conditions' => ['id' => $id]])->first();
        // UPDATE
        $query = $campaigns->query();
        $query->update()
        ->set(['counter' => $counter->counter + 1])
        ->where(['id' => $id]);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    private function createMessage($message, $client)
    {
        $messages = TableRegistry::get('messages');
        // Insert
        $query = $messages->query();
        $query->insert(['message','client_id'])
        ->values([
            'message' => $message,
            'client_id' => $client->id
        ]);
    
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
