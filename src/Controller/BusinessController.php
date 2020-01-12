<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Business Controller
 *
 *
 * @method \App\Model\Entity\Busines[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $business = $this->paginate($this->Business);

        $this->set(compact('business'));
    }

    /**
     * View method
     *
     * @param string|null $id Busines id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $busines = $this->Business->get($id, [
            'contain' => [],
        ]);

        $this->set('busines', $busines);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $busines = $this->Business->newEntity();
        if ($this->request->is('post')) {
            $busines = $this->Business->patchEntity($busines, $this->request->getData());
            if ($this->Business->save($busines)) {
                $this->Flash->success(__('The busines has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The busines could not be saved. Please, try again.'));
        }
        $this->set(compact('busines'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Busines id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $busines = $this->Business->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $busines = $this->Business->patchEntity($busines, $this->request->getData());
            if ($this->Business->save($busines)) {
                $this->Flash->success(__('The busines has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The busines could not be saved. Please, try again.'));
        }
        $this->set(compact('busines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Busines id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busines = $this->Business->get($id);
        if ($this->Business->delete($busines)) {
            $this->Flash->success(__('The busines has been deleted.'));
        } else {
            $this->Flash->error(__('The busines could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
