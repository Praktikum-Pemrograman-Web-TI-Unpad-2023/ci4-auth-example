<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get','post'],'/', 'Auth::index');
$routes->get('logout','Auth::logout');
$routes->match(['get','post'], 'register', 'Auth::register');
$routes->get('dashboard','Dashboard::index',['filter' => 'auth']);