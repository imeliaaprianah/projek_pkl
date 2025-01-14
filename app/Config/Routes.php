<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth\Login::index');

$routes->get('/dashboard-admin', 'Admin\DashboardAdmin::index');

// Pasang Baru
$routes->get('/dashboard-pb', 'Admin\DashboardPB::index');

$routes->get('/data-pelanggan-pb', 'Admin\DatPelPB::index');
$routes->get('/data-pelanggan-pb/tambah', 'Admin\DatPelPB::tambah');
$routes->post('/simpan-data-pb', 'Admin\DatPelPB::simpan');
$routes->get('/data-pelanggan-pb/edit/(:num)', 'Admin\DatPelPB::edit/$1');
$routes->post('/data-pelanggan-pb/update/(:num)', 'Admin\DatPelPB::update/$1');
$routes->get('/data-pelanggan-pb/delete/(:num)', 'Admin\DatPelPB::delete/$1');
$routes->get('/data-pelanggan-pb/detail/(:num)', 'Admin\DatPelPB::detail/$1');
$routes->get('uploads/(:any)', 'Admin\DatPelPB::serveFile/$1');

$routes->get('/tindak-lanjut-pb', 'Admin\TindakLanjutAdminPB::index');
$routes->get('/tindak-lanjut-pb/edit/(:num)', 'Admin\TindakLanjutAdminPB::edit/$1');
$routes->post('/tindak-lanjut-pb/update/(:num)', 'Admin\TindakLanjutAdminPB::update/$1');
$routes->get('/tindak-lanjut-pb/delete/(:num)', 'Admin\TindakLanjutAdminPB::delete/$1');
$routes->get('/tindak-lanjut-pb/detail/(:num)', 'Admin\TindakLanjutAdminPB::detail/$1');

$routes->get('/selesai-pb', 'Admin\SelesaiPB::index');
$routes->get('/selesai-pb/detail/(:num)', 'Admin\SelesaiPB::detail/$1');


// Perubahan Daya
$routes->get('/dashboard-pd', 'Admin\DashboardPD::index');
$routes->get('/data-pelanggan-pd', 'Admin\DatPelPD::index');
$routes->get('/data-pelanggan-pd/tambah', 'Admin\DatPelPD::tambah');
$routes->post('/simpan-data-pd', 'Admin\DatPelPD::simpan');
$routes->get('/data-pelanggan-pd/edit/(:num)', 'Admin\DatPelPD::edit/$1');
$routes->post('/data-pelanggan-pd/update/(:num)', 'Admin\DatPelPD::update/$1');
$routes->get('data-pelanggan-pd/delete/(:num)', 'Admin\DatPelPD::delete/$1');
$routes->get('/data-pelanggan-pd/detail/(:num)', 'Admin\DatPelPD::detail/$1');
$routes->get('uploads/(:any)', 'Admin\DatPelPD::serveFile/$1');

$routes->get('/tindak-lanjut-pd', 'Admin\TindakLanjutAdminPD::index');
$routes->get('/tindak-lanjut-pd/edit/(:num)', 'Admin\TindakLanjutAdminPD::edit/$1');
$routes->post('/tindak-lanjut-pd/update/(:num)', 'Admin\TindakLanjutAdminPD::update/$1');
$routes->get('/tindak-lanjut-pd/delete/(:num)', 'Admin\TindakLanjutAdminPD::delete/$1');
$routes->get('/tindak-lanjut-pd/detail/(:num)', 'Admin\TindakLanjutAdminPD::detail/$1');

$routes->get('/selesai-pd', 'Admin\SelesaiPD::index');
$routes->get('/selesai-pd/detail/(:num)', 'Admin\SelesaiPD::detail/$1');


// Pengguna
$routes->get('/pengguna', 'Admin\Pengguna::index');
$routes->get('/pengguna/tambah', 'Admin\Pengguna::tambah');
$routes->post('/simpan-pengguna', 'Admin\Pengguna::simpan');
$routes->get('/pengguna/edit/(:num)', 'Admin\Pengguna::edit/$1');
$routes->post('/update-pengguna', 'Admin\Pengguna::update');
$routes->get('pengguna/delete/(:num)', 'Admin\Pengguna::delete/$1');
