<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cities Controller
 *
 * @property \App\Model\Table\CitiesTable $Cities
 *
 * @method \App\Model\Entity\City[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CitiesController extends AppController
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

        $cities = $this->Cities->find('all', ['contain' => ['Countries']])->all();

        $this->set(compact('cities'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-default');
        $city = $this->Cities->newEntity();
        if ($this->request->is('post')) {
            $city = $this->Cities->patchEntity($city, $this->request->getData());
            if ($this->Cities->save($city)) {
                $this->Flash->success(__('La ciudad ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La ciudad no ha sido configurada correctamente.'));
        }
        $countries = $this->Cities->Countries->find('list');
        $this->set(compact('city', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id City id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('system-default');
        $city = $this->Cities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $city = $this->Cities->patchEntity($city, $this->request->getData());
            if ($this->Cities->save($city)) {
                $this->Flash->success(__('La ciudad ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La ciudad no ha sido configurada correctamente.'));
        }
        $countries = $this->Cities->Countries->find('list');
        $this->set(compact('city', 'countries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id City id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $city = $this->Cities->get($id);

        $deleted = false;

        try {
            $deleted = $this->Cities->delete($city);
        } catch(\Exception $e) {

        }    
        
        if ($deleted) {
            $this->Flash->success(__('La ciudad ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La ciudad no ha podido ser eliminada.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
