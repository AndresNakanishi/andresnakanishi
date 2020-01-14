<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Countries Controller
 *
 *
 * @method \App\Model\Entity\Country[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CountriesController extends AppController
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

        $countries = $this->paginate($this->Countries);

        $this->set(compact('countries'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-default');
        $country = $this->Countries->newEntity();
        if ($this->request->is('post')) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('El país fue guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El país no pudo ser guardado.'));
        }
        $this->set(compact('country'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('system-default');

        $country = $this->Countries->get($id, [
            'contain' => [],
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('El país fue guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El país no pudo ser guardado.'));
        }
        $this->set(compact('country'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $country = $this->Countries->get($id);

        $deleted = false;

        try {
            $deleted = $this->Countries->delete($country);
        } catch(\Exception $e) {

        }    
        
        if ($deleted) {
            $this->Flash->success(__('El país ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El país no ha podido ser eliminado.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
