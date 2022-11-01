<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


$routes->get('/', 'Login::index');
$routes->post('/admin', 'Login::admin');
$routes->post('/store', 'MahasiswaController::store');
$routes->delete('/delete/(:num)', 'MahasiswaController::delete/$1');
$routes->post('/update/(:num)', 'MahasiswaController::update/$1');
$routes->get('/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->get('/index', 'Pages::index');
$routes->get('(:any)', 'Pages::view/$1');
$routes->get('/bantuan', 'bantuan::index');


// Help
$routes->get('/Help', 'HelpCOntroller::index');
$routes->get('/tambahHelp', 'HelpCOntroller::create');
$routes->post('/simpanHelp', 'HelpCOntroller::store');


// General
$routes->get('(:any)', 'Pages::view/$1');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
