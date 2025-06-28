<?php

use CodeIgniter\Router\RouteCollection;

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 * @var RouteCollection $routes
 */

// ──────────────────────────────────────────────────────────────
// HALAMAN UTAMA – hanya bisa diakses jika sudah login
// ──────────────────────────────────────────────────────────────
$routes->get('/', 'Home::index', ['filter' => 'auth']);


// ──────────────────────────────────────────────────────────────
// AUTENTIKASI
// ──────────────────────────────────────────────────────────────
$routes->get ('login',  'AuthController::login'); // Form login
$routes->post('login',  'AuthController::login'); // Proses login (tanpa filter redirect)
$routes->get ('logout', 'AuthController::logout'); // Logout


// ──────────────────────────────────────────────────────────────
// CRUD PRODUK – seluruh route diproteksi filter 'auth'
// ──────────────────────────────────────────────────────────────
$routes->group('produk', ['filter' => 'auth'], function ($routes) {
    $routes->get('',           'ProdukController::index');         // READ
    $routes->post('',          'ProdukController::create');        // CREATE
    $routes->post('edit/(:any)','ProdukController::edit/$1');      // UPDATE
    $routes->get('delete/(:any)','ProdukController::delete/$1');   // DELETE
    $routes->get('download', 'ProdukController::download');        //DOWNLOAD
});

// CRUD KERANJANG 
$routes->group('keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
    $routes->get('invoice', 'TransaksiController::invoice');
});

// ──────────────────────────────────────────────────────────────
// CRUD USER – seluruh route diproteksi filter 'auth'
// ──────────────────────────────────────────────────────────────
$routes->group('user', ['filter' => 'auth'], function ($routes) {
    $routes->get('',             'UserController::index');          // READ
    $routes->get('create',       'UserController::create');         // Form tambah user
    $routes->post('store',       'UserController::store');          // Proses simpan user
    $routes->get('edit/(:num)',  'UserController::edit/$1');        // Form edit user
    $routes->post('update/(:num)','UserController::update/$1');     // Proses update
    $routes->get('delete/(:num)','UserController::delete/$1');      // Hapus user
});

// ──────────────────────────────────────────────────────────────
// KERANJANG / TRANSAKSI
// ──────────────────────────────────────────────────────────────
$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);


// ──────────────────────────────────────────────────────────────
// HALAMAN STATIS LAIN (tetap butuh login)
// ──────────────────────────────────────────────────────────────
$routes->get('faq',     'Home::faq',     ['filter' => 'auth']);
$routes->get('profile', 'Home::profile', ['filter' => 'auth']);
$routes->get('contact', 'Home::contact', ['filter' => 'auth']);
