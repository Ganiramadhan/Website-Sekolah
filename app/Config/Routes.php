<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Siswa');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Siswa::index');
$routes->get('/add', 'Siakad::add_mahasiswa');
$routes->get('/simpan', 'Siakad::mhs_simpan');
$routes->get('/edit/(:any)', 'Siakad::edit_mahasiswa/$1');
$routes->post('/update', 'Siakad::update_mahasiswa');
$routes->get('/del/(:any)', 'Siakad::delete_mahasiswa/$1');
$routes->get('/home', 'Siakad::home');
$routes->get('/nilai', 'Siakad::nilai');
$routes->get('/dialog', 'Siakad::nilaidialog');
$routes->get('/simpannilai', 'Siakad::simpannilai');

$routes->get('/pdf', 'Convertpdf::tes');



// $routes->get('/yoyoy', 'Helo::pesan');
// $routes->get('/paktur', 'Helo::faktur');
// $routes->get('/kali/(:any)/(:any)', 'Helo::kali/$1/$2');
// $routes->get('/nama', 'Helo::nama');
// $routes->get('/pesan', 'Helo::pesan');
// $routes->get('/cetak', 'Helo::cetak');
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
