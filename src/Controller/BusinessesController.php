<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Businesses Controller
 *
 *
 * @method \App\Model\Entity\Business[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessesController extends AppController
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

        $businesses = $this->Businesses->find('all')->all();

        $this->set(compact('businesses'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-default');

        $business = $this->Businesses->newEntity();
        if ($this->request->is('post')) {
            $business = $this->Businesses->patchEntity($business, $this->request->getData());
            if ($this->Businesses->save($business)) {
                $this->Flash->success(__('La empresa / proyecto ha sido guardad@ con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La empresa / proyecto no ha podido ser guardad@ con éxito'));
        }
        $this->set(compact('business'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('system-default');
        
        $business = $this->Businesses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $business = $this->Businesses->patchEntity($business, $this->request->getData());
            if ($this->Businesses->save($business)) {
                $this->Flash->success(__('La empresa / proyecto ha sido guardad@ con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La empresa / proyecto no ha podido ser guardad@ con éxito'));
        }
        $this->set(compact('business'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $business = $this->Businesses->get($id);

        $deleted = false;

        try {
            $deleted = $this->Businesses->delete($business);
        } catch(\Exception $e) {

        }    
        
        if ($deleted) {
            $this->Flash->success(__('El proyecto / empresa ha sido eliminad@.'));
        } else {
            $this->Flash->error(__('El proyecto / empresa no ha podido ser eliminad@.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
