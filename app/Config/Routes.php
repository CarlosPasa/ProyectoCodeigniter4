<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::index');
$routes->post('/login/check', 'Login::check');
$routes->get('/logout', 'Logout::index');
$routes->get('/home', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');
//SETTINGS
$routes->get('/settings/company','Settings::index');
$routes->post('/settings/companyUpdate','Settings::companyUpdate');
//ACTIVITY LOGS
$routes->get('/activity_logs','Activity_logs::index');
$routes->get('/activity_logs/view/(:segment)','Activity_logs::view/$1');
//USERS
$routes->get('/users', 'Users::index');
$routes->get('/users/add', 'Users::add');
$routes->get('/users/view/(:segment)','Users::view/$1');
$routes->get('/users/edit/(:segment)','Users::edit/$1');
$routes->post('/users/update/(:segment)','Users::update/$1');
$routes->post('/users/save','Users::save');
$routes->get('/users/delete/(:segment)', 'Users::delete/$1');
//ROLES
$routes->get('/roles', 'Roles::index');
$routes->get('/roles/add', 'Roles::add');
$routes->get('/roles/edit/(:segment)','Roles::edit/$1');
$routes->post('/roles/update/(:segment)','Roles::update/$1');
$routes->post('/roles/save','Roles::save');
$routes->get('/roles/delete/(:segment)', 'Roles::delete/$1');
//PERMISSIONS
$routes->get('/permissions', 'Permissions::index');
$routes->get('/permissions/add', 'Permissions::add');
$routes->get('/permissions/edit/(:segment)','Permissions::edit/$1');
$routes->post('/permissions/update/(:segment)','Permissions::update/$1');
$routes->post('/permissions/save','Permissions::save');
$routes->get('/permissions/delete/(:segment)', 'Permissions::delete/$1');
//MENU
$routes->get('/menu', 'Menu::index');
$routes->get('/menu/add', 'Menu::add');
$routes->get('/menu/edit/(:segment)','Menu::edit/$1');
$routes->post('/menu/update','Menu::update');
$routes->post('/menu/save','Menu::save');
$routes->POST('/menu/deleteAction/(:segment)', 'Menu::deleteAction/$1');
//CATEGORIAS
$routes->get('/categoria', 'Categoria::index');
$routes->get('/categoria/nuevoModal', 'Categoria::nuevoModal');
$routes->post('/categoria/nuevoModalAction','Categoria::nuevoModalAction');
$routes->get('/categoria/edit/(:segment)','Categoria::edit/$1');
$routes->post('/categoria/editAction','Categoria::editAction');
$routes->post('/categoria/deleteAction/(:segment)', 'Categoria::deleteAction/$1');
//GASTOS
$routes->get('/gasto', 'Gasto::index');
$routes->get('/gasto/oneMonth/(:segment)', 'Gasto::oneMonth/$1');
$routes->get('/gasto/nuevoModal', 'Gasto::nuevoModal');
$routes->post('/gasto/nuevoModalAction','Gasto::nuevoModalAction');
$routes->get('/gasto/edit/(:segment)','Gasto::edit/$1');
$routes->post('/gasto/editAction','Gasto::editAction');
$routes->post('/gasto/deleteAction/(:segment)', 'Gasto::deleteAction/$1');


// $routes->setDefaultController('Dashboard');


