<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher; 
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\TableRegistry;
use App\Model\Entity\User;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['login']);
    }

    public function index()
    {
        $this->viewBuilder()->setLayout('system-datatables');
        $users = $this->Users->find('all',['contain' => 'Profiles'])->where(['Profiles.code <>' => 'GOD'])->all();
        $this->set('users', $users);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $newpassword = $this->generate_password(8);
            $data['username'] = filter_var($data['username'], FILTER_SANITIZE_STRING);              
            $data['surname'] = filter_var($data['surname'], FILTER_SANITIZE_STRING);              
            $data['name'] = filter_var($data['name'], FILTER_SANITIZE_STRING);              
            $data['password'] = $newpassword;
            $data['active'] = 1;
            $data['avatar'] = 'https://ui-avatars.com/api/?font-size=0.33&background=0D8ABC&color=fff&name='.$data['name'].'+'.$data['surname'];
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                try {
                    $this->getMailer('Users')->send('welcomeMember', [$user, $newpassword]);
                    $this->Flash->success(__('Un nuevo usuario ha sido habilitado correctamente.'));
                    return $this->redirect(['action' => 'index']);
                } catch (Exception $e) {
                    $this->Flash->error(__('El usuario no ha podido ser habilitado.'));
                }
            }
        }
        $profiles = $this->Users->Profiles->find('list', ['conditions' => ['code <>' => 'GOD']])->order(['name' => 'ASC']);
        $this->set(compact('user', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($username = null)
    {
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->contain('Profiles')->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['username'] = filter_var($data['username'], FILTER_SANITIZE_STRING);              
            $data['surname'] = filter_var($data['surname'], FILTER_SANITIZE_STRING);              
            $data['name'] = filter_var($data['name'], FILTER_SANITIZE_STRING);     
            if ($data !== false) {
                $user = $this->Users->patchEntity($user, $data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Se han guardado los cambios exitosamente.'));
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('No hubo cambios en el registro.'));
            }
        }
        $profiles = $this->Users->Profiles->find('list', ['conditions' => ['code <>' => 'GOD']])->order(['name' => 'ASC']);
        $this->set(compact('user', 'profiles'));
    }

    // Configurar el perfil del usuario

    public function configData($username = null)
    {
        $session = $this->request->getSession();
        $this->autoRender = false;
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->first();
        if ($this->Auth->user('username') !== $username) {
            $this->Flash->error(__('No tiene acceso a la información de otra cuenta.'));
            return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['surname'] = filter_var($data['surname'], FILTER_SANITIZE_STRING);              
            $data['name'] = filter_var($data['name'], FILTER_SANITIZE_STRING);     
            $data['avatar'] = $this->changeAvatar($data['avatar'], $data['name'], $data['surname'], $user->id);                 
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Se han actualizado los cambios.'));
                return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
            } else {
                $this->Flash->error(__('No se han podido actualizar los cambios.'));
            }
        } 
    }

    private function changeAvatar($avatar, $name, $surname, $id){
        $imgFolder = "img/users/$id/";
        $folder = WWW_ROOT . $imgFolder;
        $fileName = "avatar.jpg";
        $fileTmp = $avatar["tmp_name"];
        $fileDest = $folder . $fileName;
            
        if ($avatar['name'] == '') {
            if (!file_exists($fileDest)) {   
                $newAvatar = 'https://ui-avatars.com/api/?size=256&font-size=0.33&background=0D8ABC&color=fff&name='.$name.'+'.$surname;
            }
        } else {
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            if (file_exists($fileDest)) {   
                unlink($fileDest);
                $success = move_uploaded_file($fileTmp, $fileDest);                         
            } else {
                $success = move_uploaded_file($fileTmp, $fileDest);                         
            }

            $newAvatar = $imgFolder . $fileName;
        }
        return $newAvatar;
    }

    // Cambiar la Contraseña

    public function configPass($username = null)
    {
        $session = $this->request->getSession();
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->first();
        if ($this->Auth->user('username') !== $username) {
            $this->Flash->error(__('No tiene acceso a la información de otra cuenta.'));
            return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $password = $data['new_password'];
            $new_password_validate = $data['new_password_validation'];
            $new_password = [
                'password' => $password
            ];
 
            
            if ($password !== $new_password_validate){
                $this->Flash->error(__('Las contraseñas nuevas no coinciden.'));
                return $this->redirect(['action' => 'configPass',$this->Auth->user('username')]);
            }
            
            if  (!(new DefaultPasswordHasher())->check($data['old_password'], $user->password)) {
           
                $this->Flash->error(__('La contraseña anterior es errónea.'));
                return $this->redirect(['action' => 'configPass',$this->Auth->user('username')]);
               
            }
            
            $user = $this->Users->patchEntity($user, $new_password);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Se ha cambiado la contraseña correctamente.'));
                return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
            } else {
                $this->Flash->error(__('No se ha podido cambiar la contraseña. Por favor conáctese con el administrador del sistema'));
            }
        } 
        $this->set('user', $user);
    }

    // El usuario ve su propia información...

    public function config($username = null)
    {
        $session = $this->request->getSession();
        $this->viewBuilder()->setLayout('system-default');
        if ($this->Auth->user('username') !== $username) {
            $this->Flash->error(__('No puede editar la información sensible de otro usuario.'));
            return $this->redirect(['action' => 'dashboard']);
        }
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->contain('Profiles')->first();
        $this->set('user', $user);
    }

    /* --- Login --- */

    public function login()
    {
        $this->viewBuilder()->setLayout('system-auth');
        if ($this->Auth->user('id') !== null) {
            return $this->redirect(['action' => 'dashboard']);
        }
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Usuario o Password inválido.'));
            }
        }
    }

    /* --- Logout --- */

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function dashboard()
    {
        $this->viewBuilder()->setLayout('system-default');
        $mt = TableRegistry::get('messages');
        $ct = TableRegistry::get('clients');
        
        // Mensajes
        $allMessages = $mt->find('all')->count();
        $messages = $mt->find('all', ['conditions' => ['created_at >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY']])->count();
        /*$lastMessages = $mt->find()->
        select([
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
        ]])->order(['Messages.created_at' => 'DESC'])->limit('4')
        ->enableHydration(false)
        ->toList();*/
        
        // Clientes
        $clients = $ct->find('all', ['conditions' => ['client' => 1]])->count();
        $prospects = $ct->find('all', ['conditions' => ['client' => 0]])->count();

        $this->set(compact('allMessages', 'messages', 'clients', 'prospects'));
    }


    // Activar - Desactivar
    public function toggleActive($username = null)
    {        
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->first();
        $deleted = false;

        if ($user->active == 0) {
            $user->active = 1;
        } else {
            $user->active = 0;
        }

        try {
            $deleted = $this->Users->save($user);
        } catch(\Exception $e) {
            
        }

        if ($deleted) {
            if ($user->active == 0) {
                $this->Flash->success(__('El usuario ha sido deshabilitado.'));
            } else {
                $this->Flash->success(__('El usuario ha sido habilitado.'));
            }
        } else {
            if ($user->active == 0) {
                $this->Flash->error(__('El usuario no ha podido ser habilitado. Por favor, intente nuevamente.'));
            } else {
                $this->Flash->error(__('El usuario no ha podido ser deshabilitado. Por favor, intente nuevamente.'));
            }
        }

        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $user = $this->Users->get($id);
        $deleted = false;

        try {
            $deleted = $this->Users->delete($user);
        } catch(\Exception $e) {

        }
        
        if ($deleted) {
            $this->Flash->success(__('El usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El  usuario no pudo ser eliminado. Intente más tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // Generar Contraseña
    private function generate_password($length = 8) {
       $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-?";
       $password = substr(str_shuffle($chars), 0, $length);
       return $password;
    } 
}
