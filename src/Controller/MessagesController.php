<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 *
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('system-datatables');

        $messages = $this->Messages->find();

        $messages->select([
            'Messages.id',
            'Clients.name',
            'Clients.email',
            'Messages.created_at',
            'Businesses.name',
            'Cities.name'
        ])->join([[
            'table' => 'clients',
            'alias' => 'Clients',
            'type' => 'INNER',
            'conditions' => ['Clients.id=Messages.client_id']
        ]])->join([[
            'table' => 'businesses',
            'alias' => 'Businesses',
            'type' => 'LEFT',
            'conditions' => ['Businesses.id=Clients.business_id']
        ]])->join([[
            'table' => 'cities',
            'alias' => 'Cities',
            'type' => 'LEFT',
            'conditions' => ['Cities.id=Clients.city_id']
        ]])->enableHydration(false)
        ->toList();



        $this->Messages->find('all', ['contain' => ['Clients']])->all();

        $this->set(compact('messages'));
    }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('system-default');

        $message = $this->Messages->find();

        $message->select([
            'Messages.id',
            'Messages.message',
            'Clients.name',
            'Clients.email',
            'Messages.created_at',
            'Businesses.name',
            'Cities.name'
        ])->join([[
            'table' => 'clients',
            'alias' => 'Clients',
            'type' => 'INNER',
            'conditions' => ['Clients.id=Messages.client_id']
        ]])->join([[
            'table' => 'businesses',
            'alias' => 'Businesses',
            'type' => 'LEFT',
            'conditions' => ['Businesses.id=Clients.business_id']
        ]])->join([[
            'table' => 'cities',
            'alias' => 'Cities',
            'type' => 'LEFT',
            'conditions' => ['Cities.id=Clients.city_id']
        ]])->where(['Messages.id' => $id])->enableHydration(false)
        ->toList();
        $message = $message->first();

        $this->set('message', $message);
    }

    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $message = $this->Messages->get($id);

        $deleted = false;

        try {
            $deleted = $this->Messages->delete($message);
        } catch(\Exception $e) {

        }    
        
        if ($deleted) {
            $this->Flash->success(__('El mensaje ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El mensaje no ha podido ser eliminado.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
