<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

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
            dd($data);
            $this->Flash->success(__('¡Gracias! Pronto te contactaremos 😊'));
        }
    }

    // 3.0 About Page
    public function about()
    {
        $this->viewBuilder()->setLayout('guests');

    }

    // 5.0 Contact Page
    public function contact()
    {
        $this->viewBuilder()->setLayout('guests');
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $this->Flash->success(__('¡El mensaje fue enviado! Pronto te contactaremos 😊'));
        }
    }


}
