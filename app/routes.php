<?php
$routes = [
    '/pages/about-us' => ['controller' => 'PageController', 'action' => 'aboutUsAction'],
    '/user/{id}' => ['controller' => 'UserController', 'action' => 'showAction'],
    '/user/edit/{id}' => ['controller' => 'UserController', 'action' => 'showAction', 'guard' => 'Authenticated'],
    '/pages/login'=>['controller'=>'LoginController','action'=>'login'],
    '/pages/register'=>['controller'=>'RegisterController','action'=>'register']
];
