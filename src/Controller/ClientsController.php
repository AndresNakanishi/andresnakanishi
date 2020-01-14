<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 *
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
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

        $clients = $this->Clients->find('all', ['contain' => ['Cities', 'Businesses', 'Campaigns']])->all();

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('system-default');
        
        $client = $this->Clients->get($id, [
            'contain' => ['Cities', 'Businesses', 'Campaigns', 'Messages'],
        ]);

        $this->set('client', $client);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-default');
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('El cliente ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El cliente no pudo ser guardado con éxito.'));
        }
        $cities = $this->Clients->Cities->find('list');
        $businesses = $this->Clients->Businesses->find('list');
        $campaigns = $this->Clients->Campaigns->find('list');
        $this->set(compact('client', 'cities', 'businesses', 'campaigns'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('system-default');
        $client = $this->Clients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('El cliente ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El cliente no pudo ser guardado con éxito.'));
        }
        $cities = $this->Clients->Cities->find('list');
        $businesses = $this->Clients->Businesses->find('list');
        $campaigns = $this->Clients->Campaigns->find('list');
        $this->set(compact('client', 'cities', 'businesses', 'campaigns'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $client = $this->Clients->get($id);

        $deleted = false;

        try {
            $deleted = $this->Clients->delete($client);
        } catch(\Exception $e) {

        }    
        
        if ($deleted) {
            $this->Flash->success(__('El cliente ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El cliente no ha podido ser eliminado.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
