<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home');
$routes->get('/contact', 'UsController::index');
$routes->post('/admin', 'Login::admin');
$routes->post('/pages/add', 'Pages::add');
$routes->post('/pages/update', 'Pages::update');
$routes->post('/buyAja', 'Pages::bayar');
$routes->get('/buy', 'OrderController::index');
$routes->post('/OrderController/bayar', 'OrderController::bayar');
$routes->get('/notaBayar', 'NotaController::index');
$routes->get('/pages/delete/(:any)', 'Pages::delete/$1');
$routes->get('/cek', 'Pages::cek');
$routes->get('/clear', 'Pages::clear');
$routes->get('/cart', 'Pages::cart');


$routes->get('/create', 'MahasiswaController::create');
$routes->post('/store', 'MahasiswaController::store');
$routes->get('/keluar', 'Logout::logout');

$routes->get('/bantuan', 'bantuan::index');

$routes->get('/index', 'Pages::index');

// Admin
$routes->get('/HomeAdmin', 'ProdukController::index');
$routes->get('/tambahProduk', 'ProdukController::create');
$routes->post('/simpanProduk', 'ProdukController::simpan');
$routes->post('/updateProduk/(:num)', 'ProdukController::update/$1');
$routes->get('/daftar', 'Register::index');
$routes->post('/daftar/simpan', 'Register::simpan');
$routes->get('/editProduk/(:num)', 'ProdukController::edit/$1');
$routes->delete('/deleteProduk/(:num)', 'ProdukController::delete/$1');

// Contact
$routes->get('/Teams', 'UsController::index2');
$routes->get('/tambahContact', 'UsController::create');
$routes->post('/simpanContact', 'UsController::simpan');
$routes->post('/updateContact/(:num)', 'UsController::update/$1');
$routes->get('/editContact/(:num)', 'UsController::edit/$1');
$routes->delete('/deleteContact/(:num)', 'UsController::delete/$1');

// Help
$routes->get('/Help', 'HelpController::index');
$routes->get('/tambahHelp', 'HelpController::create');
$routes->post('/simpanHelp', 'HelpController::store');
$routes->post('/updateHelp/(:num)', 'HelpController::update/$1');
$routes->get('/editHelp/(:num)', 'HelpController::edit/$1');
$routes->delete('/deleteHelp/(:num)', 'HelpController::delete/$1');

$routes->get('/cobacoba','testes::testes');

// General
$routes->get('(:any)', 'Pages::view/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
