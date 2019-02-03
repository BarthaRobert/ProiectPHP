<?php
$routes = [
    '/page/about-us' => ['controller' => 'PageController', 'action' => 'aboutUsAction'],
    '/user/{id}' => ['controller' => 'UserController', 'action' => 'showAction'],
    '/user/edit/{id}' => ['controller' => 'UserController', 'action' => 'showAction', 'guard' => 'Authenticated'],
    '/login' => ['controller' => 'LoginController', 'action' => 'loginPage'],
    '/login/auth' => ['controller' => 'LoginController', 'action' => 'loginAction'],
    '/logout' => ['controller' => 'LoginController', 'action' => 'logoutAction'],
    '/register' => ['controller' => 'LoginController', 'action' => 'registerPage'],
    '/register/reg' => ['controller' => 'LoginController', 'action' => 'registerAction'],
    '/updates' => ['controller' => 'UpdateController', 'action' => 'updatesPage'],
    '/updates/add'=>['controller' => 'UpdateController' , 'action' => 'showUpdatesAction'],
    '/' =>['controller' => 'PageController', 'action' => 'home']
];