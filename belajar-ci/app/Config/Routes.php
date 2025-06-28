<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman utama
$routes->get('/', 'Pages::index');
$routes->get('/tentang', 'Pages::tentang');
$routes->get('/galeri', 'Pages::galeri');

// Login (pakai LoginController)
$routes->get('/login', 'LoginController::index');         // Tampilkan form login
$routes->post('/login/proses', 'LoginController::proses'); // Proses login
// Logout
$routes->get('/logout', 'LoginController::logout');

//Produk
$routes->get('/products', 'Product::index');
$routes->get('/product/(:num)', 'Product::detail/$1');
$routes->get('/cart', 'Cart::index');
$routes->get('/cart/add/(:num)', 'Cart::add/$1');
$routes->get('/cart/remove/(:num)', 'Cart::remove/$1');
$routes->get('cart/clear', 'Cart::clear');
$routes->get('/checkout', 'Cart::checkout');
$routes->get('cart/invoice', 'Cart::invoice');

// Member (CRUD)
$routes->get('/members', 'MemberController::index');
$routes->get('/members/create', 'MemberController::create');
$routes->post('/members/store', 'MemberController::store');
$routes->get('/members/edit/(:num)', 'MemberController::edit/$1');
$routes->post('/members/update/(:num)', 'MemberController::update/$1');
$routes->get('/members/delete/(:num)', 'MemberController::delete/$1');

