<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/migrate', 'Migrate::index');
$routes->get('/signup', 'Signup::new', ['filter' => 'guest']);
$routes->get('/login', 'Login::new',['filter' => 'guest']);
$routes->get('/admin/users', 'Admin\Users::index');
$routes->get('/admin/users', 'Admin\Users::new');


$routes->get('/tasks/show/(:num)', 'Tasks::show/$1');
$routes->get('/tasks/new', 'Tasks::new');
$routes->post('/tasks/create', 'Tasks::create');
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('/tasks/edit/(:num)', 'Tasks::update/$1');
$routes->get('/tasks/delete/(:num)', 'Tasks::delete/$1');
$routes->post('/tasks/delete/(:num)', 'Tasks::delete/$1');
$routes->post('/signup/create', 'Signup::create');
$routes->get('/signup/success', 'Signup::success');
$routes->post('/login/create', 'Login::create');
$routes->get('/logout', 'Login::delete');
$routes->get('/login/showLogoutMessage', 'Login::showLogoutMessage');

