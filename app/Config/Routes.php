<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// USER PAGE
$routes->get('/', 'Home::index');
$routes->get('pengaduan', 'PengaduanController::index');

$routes->get('/login_sistem', 'Auth::index');
$routes->get('/registrasi', 'Auth::regis');
$routes->get('/lupa_password', 'Auth::lupa_pw');
$routes->post('/lupa_password', 'Auth::aksi_lupa_pw');
$routes->get('/reset_password', 'Auth::reset_pw');
$routes->get('/password_baru/(:segment)', 'Auth::pw_baru/$1');
$routes->post('/password_baru', 'Auth::validasi_pw_baru');

// $routes->get('/artikel_admin', 'Admin\ArtikelController::index');
// $routes->get('/tambah', 'Admin\ArtikelController::input_article');
$routes->get('/artikel_user', 'Admin\ArtikelController::user_articles');
$routes->get('/detail_artikel', 'Admin\ArtikelController::article_details');


$routes->get('/ganti_email', 'Auth::ganti_email');



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
            $routes->get('tambah', 'ArtikelController::add_article', ['namespace' => '\App\Controllers\Admin' ]);
            $routes->post('tambah', 'ArtikelController::input_article', ['namespace' => '\App\Controllers\Admin' ]);

			$routes->get('details/(:segment)', 'ArtikelController::data/$1', ['namespace' => '\App\Controllers\Admin' ]);
			$routes->get('edit/(:segment)', 'ArtikelController::edit_article/$1', ['namespace' => '\App\Controllers\Admin' ]);
			$routes->post('edit/(:segment)', 'ArtikelController::update_article/$1', ['namespace' => '\App\Controllers\Admin' ]);
			$routes->get('hapus/(:segment)', 'ArtikelController::delete_article/$1', ['namespace' => '\App\Controllers\Admin' ]);

        });

        /* ====================================== PENGADUAN ADMIN ================================================== */
        $routes->get('daftar_pengaduan', 'PengaduanController::index', ['namespace' => '\App\Controllers\Admin']);
        $routes->get('detail_pengaduan=belum_diproses', 'PengaduanController::detail_proses', ['namespace' => '\App\Controllers\Admin']);
        $routes->get('detail_pengaduan=sedang_diproses', 'PengaduanController::detail_solusi', ['namespace' => '\App\Controllers\Admin']);
        $routes->get('detail_pengaduan=sudah_diproses', 'PengaduanController::detail_selesai', ['namespace' => '\App\Controllers\Admin']);
    });

    /* ====================================== Operator ================================================== */
    $routes->get('operator', 'DashboardController::index', ['namespace' => '\App\Controllers\Operator']);
    $routes->group('operator', static function ($routes) {
        //isi route lanjutan

    });

    
});
