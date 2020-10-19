<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    /* Rutas de la Webpage */
    
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/tdco', ['controller' => 'Pages', 'action' => 'tdco']);
    $routes->connect('blog', ['controller' => 'Pages', 'action' => 'blog']);
    $routes->connect('blog/c/*', ['controller' => 'Pages', 'action' => 'category']);
    $routes->connect('blog/*', ['controller' => 'Pages', 'action' => 'post']);
    $routes->connect('/cases-of-study', ['controller' => 'Pages', 'action' => 'casesOfStudy']);
    $routes->connect('/webstudio', ['controller' => 'Pages', 'action' => 'webstudio']);
    $routes->connect('/about', ['controller' => 'Pages', 'action' => 'about']);
    $routes->connect('/contact', ['controller' => 'Pages', 'action' => 'contact']);

    /* Rutas del Sistema */

    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
    $routes->connect('/dashboard', ['controller' => 'Users', 'action' => 'dashboard']);



    $routes->fallbacks(DashedRoute::class);
});
