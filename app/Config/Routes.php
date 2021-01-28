<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'OneMillionEuros::index');

$routes->match(['get','post'],'infos', 'Infos::index',['filter' => 'auth']);
$routes->get('/login', 'Login::index', ['filter' => 'noauth']);
$routes->match(['get','post'],'signin', 'Login::signin', ['filter' => 'noauth']);
$routes->get('logout', 'Login::logout');
$routes->get('/emplacementpixel_view','Ajoutimgdspxl::emplacementpixel_view');
$routes->get('/ajoutimagedanspixel','Achat::ajoutimagedanspixel');
$routes->match(['get','post'],'mdpoublie', 'Login::mdpoublie', ['filter' => 'noauth']);
$routes->match(['get','post'],'deleteacc', 'Login::deleteacc', ['filter' => 'noauth']);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
