<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login_sistem', 'Auth::index');
$routes->get('/registrasi', 'Auth::regis');
$routes->get('/lupa_password', 'Auth::lupa_pw');
$routes->post('/lupa_password', 'Auth::aksi_lupa_pw');
$routes->get('/reset_password', 'Auth::reset_pw');
$routes->get('/password_baru/(:segment)', 'Auth::pw_baru/$1');
$routes->post('/password_baru', 'Auth::validasi_pw_baru');

$routes->get('/daftar_artikel', 'Admin\Artikel::daftar_artikel');
$routes->get('/detail_artikel', 'Admin\Artikel::detail_artikel');
$routes->get('/tambah_artikel', 'Admin\Artikel::tambah_artikel');



//
$routes->post('login_sistem', 'Auth::authsignin');
$routes->get('logout', 'Auth::logout');


$routes->get('dashboard', 'RoleController::index');
$routes->group('dashboard', static function ($routes) {
    /* ====================================== ADMIN ================================================== */

    $routes->get('admin', 'DashboardController::index', ['namespace' => '\App\Controllers\Admin']);
    $routes->group('admin', static function ($routes) {
        /* ====================================== ARTIKEL ADMIN ================================================== */

        $routes->get('artikel', 'ArtikelController::index', ['namespace' => '\App\Controllers\Admin']);
        $routes->group('artikel', static function ($routes) {

        });
    });

    /* ====================================== Operator ================================================== */
    $routes->get('operator', 'DashboardController::index', ['namespace' => '\App\Controllers\Operator']);
    $routes->group('operator', static function ($routes) {
        //isi route lanjutan

    });

    
});
