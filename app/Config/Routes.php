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

$routes->get('/', 'Frontend::index');
$routes->get('/shop/(:segment)/detail', 'Pesanan::show/$1');
$routes->add('/shop/pesan', 'Pesanan::create');

$routes->get('/shop', 'Frontend::shop');
$routes->get('/abaut_us', 'Frontend::about_us');
$routes->get('/shop_detail', 'Frontend::shop_detail');
$routes->get('/pesananku', 'Frontend::shoping_cart');
$routes->get('/pesananku/(:segment)/delete', 'Frontend::delete/$1');

$routes->get('/check_out', 'Frontend::check_out');
$routes->get('/blog_detail', 'Frontend::blog_detail');
$routes->get('/blog', 'Frontend::blog');
$routes->get('/kontak', 'Frontend::kontak');

$routes->get('/login', 'User::login');
$routes->add('/login/proseslog', 'User::proseslog');
$routes->get('/register', 'User::register');
$routes->add('/register/prosesreg', 'User::prosesreg');
$routes->get('/logout', 'User::logout');


$routes->add('/pesanan', 'Pesanan::index');
$routes->get('/pesanan/(:segment)/delete', 'Pesanan::delete/$1');

$routes->add('/dashboard', 'Home::das');

$routes->get('/produk', 'Produk::index');
$routes->get('/produk/(:segment)/detail', 'Produk::show/$1');
$routes->get('/produk/add', 'Produk::new');
$routes->add('/produk/new', 'Produk::create');
$routes->get('/produk/(:segment)/delete', 'Produk::delete/$1');
$routes->add('/produk/(:segment)/edit', 'Produk::update/$1');

$routes->get('/suplier', 'Suplier::index');
$routes->get('/suplier/(:segment)/detail', 'Suplier::show/$1');
$routes->get('/suplier/add', 'Suplier::new');
$routes->add('/suplier/new', 'Suplier::create');
$routes->get('/suplier/(:segment)/delete', 'Suplier::delete/$1');
$routes->add('/suplier/(:segment)/edit', 'Suplier::update/$1');

$routes->get('/jenis_produk', 'JenisProduk::index');
$routes->get('/jenis_produk/(:segment)/detail', 'JenisProduk::show/$1');
$routes->get('/jenis_produk/add', 'JenisProduk::new');
$routes->add('/jenis_produk/new', 'JenisProduk::create');
$routes->get('/jenis_produk/(:segment)/delete', 'JenisProduk::delete/$1');
$routes->add('/jenis_produk/(:segment)/edit', 'JenisProduk::update/$1');

$routes->get('/pembelian', 'PembelianProduk::index');
$routes->get('/pembelian/(:segment)/detail', 'PembelianProduk::show/$1');
$routes->get('/pembelian/add', 'PembelianProduk::new');
$routes->add('/pembelian/new', 'PembelianProduk::create');
$routes->get('/pembelian/(:segment)/delete', 'PembelianProduk::delete/$1');
$routes->add('/pembelian/(:segment)/edit', 'PembelianProduk::update/$1');

$routes->get('/user', 'User::index');
$routes->get('/user/(:segment)/detail', 'User::show/$1');
$routes->get('/user/add', 'User::new');
$routes->add('/user/new', 'User::create');
$routes->get('/user/(:segment)/delete', 'User::delete/$1');
$routes->add('/user/(:segment)/edit', 'User::update/$1');
    

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