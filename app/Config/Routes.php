<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth\Login::index');
$routes->get('/logout', 'Auth\Login::logout');
$routes->post('/login', 'Auth\Login::login');

// ADMIN
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

/////////////////////////////////////////////////////////////////////////////////////////////
//PetugasSurvey

$routes->get('/dashboard-k', 'PetugasSurvey\DashboardPetugasSurvey::index');

// Pasang Baru
$routes->get('/dashboard-pb-k', 'PetugasSurvey\DashboardPB::index');

$routes->get('/data-pelanggan-pb-k', 'PetugasSurvey\DatPelPB::index');
$routes->get('/data-pelanggan-pb-k/tambah', 'PetugasSurvey\DatPelPB::tambah');
$routes->post('/simpan-data-pb-k', 'PetugasSurvey\DatPelPB::simpan');
$routes->get('/data-pelanggan-pb-k/edit/(:num)', 'PetugasSurvey\DatPelPB::edit/$1');
$routes->post('/data-pelanggan-pb-k/update/(:num)', 'PetugasSurvey\DatPelPB::update/$1');
$routes->get('/data-pelanggan-pb-k/delete/(:num)', 'PetugasSurvey\DatPelPB::delete/$1');
$routes->get('/data-pelanggan-pb-k/detail/(:num)', 'PetugasSurvey\DatPelPB::detail/$1');
$routes->get('uploads/(:any)', 'PetugasSurvey\DatPelPB::serveFile/$1');

$routes->get('/tindak-lanjut-pb-k', 'PetugasSurvey\TindakLanjutpsPB::index');
$routes->get('/tindak-lanjut-pb-k/edit/(:num)', 'PetugasSurvey\TindakLanjutpsPB::edit/$1');
$routes->post('/tindak-lanjut-pb-k/update/(:num)', 'PetugasSurvey\TindakLanjutpsPB::update/$1');
$routes->get('/tindak-lanjut-pb-k/delete/(:num)', 'PetugasSurvey\TindakLanjutpsPB::delete/$1');
$routes->get('/tindak-lanjut-pb-k/detail/(:num)', 'PetugasSurvey\TindakLanjutpsPB::detail/$1');

$routes->get('/selesai-pb-k', 'PetugasSurvey\SelesaiPB::index');
$routes->get('/selesai-pb-k/detail/(:num)', 'PetugasSurvey\SelesaiPB::detail/$1');

//perubahan daya
$routes->get('/dashboard-pd-k', 'PetugasSurvey\DashboardPD::index');
$routes->get('/data-pelanggan-pd-k', 'PetugasSurvey\DatPelPD::index');
$routes->get('/data-pelanggan-pd-k/tambah', 'PetugasSurvey\DatPelPD::tambah');
$routes->post('/simpan-data-pd-k', 'PetugasSurvey\DatPelPD::simpan');
$routes->get('/data-pelanggan-pd-k/edit/(:num)', 'PetugasSurvey\DatPelPD::edit/$1');
$routes->post('/data-pelanggan-pd-k/update/(:num)', 'PetugasSurvey\DatPelPD::update/$1');
$routes->get('data-pelanggan-pd-k/delete/(:num)', 'PetugasSurvey\DatPelPD::delete/$1');
$routes->get('/data-pelanggan-pd-k/detail/(:num)', 'PetugasSurvey\DatPelPD::detail/$1');
$routes->get('uploads/(:any)', 'PetugasSurvey\DatPelPD::serveFile/$1');

$routes->get('/tindak-lanjut-pd-k', 'PetugasSurvey\TindakLanjutpsPD::index');
$routes->get('/tindak-lanjut-pd-k/edit/(:num)', 'PetugasSurvey\TindakLanjutpsPD::edit/$1');
$routes->post('/tindak-lanjut-pd-k/update/(:num)', 'PetugasSurvey\TindakLanjutpsPD::update/$1');
$routes->get('/tindak-lanjut-pd-k/delete/(:num)', 'PetugasSurvey\TindakLanjutpsPD::delete/$1');
$routes->get('/tindak-lanjut-pd-k/detail/(:num)', 'PetugasSurvey\TindakLanjutpsPD::detail/$1');

$routes->get('/selesai-pd-k', 'PetugasSurvey\SelesaiPD::index');
$routes->get('/selesai-pd-k/detail/(:num)', 'PetugasSurvey\SelesaiPD::detail/$1');


/////////////////////////////////////////////////////////////////////////////////////////////
//Manager

$routes->get('/dashboard-m', 'Manager\DashboardManager::index');

// Pasang Baru
$routes->get('/dashboard-pb-m', 'Manager\DashboardPB::index');

$routes->get('/data-pelanggan-pb-m', 'Manager\DatPelPB::index');
$routes->get('/data-pelanggan-pb-m/tambah', 'Manager\DatPelPB::tambah');
$routes->post('/simpan-data-pb-m', 'Manager\DatPelPB::simpan');
$routes->get('/data-pelanggan-pb-m/edit/(:num)', 'Manager\DatPelPB::edit/$1');
$routes->post('/data-pelanggan-pb-m/update/(:num)', 'Manager\DatPelPB::update/$1');
$routes->get('/data-pelanggan-pb-m/delete/(:num)', 'Manager\DatPelPB::delete/$1');
$routes->get('/data-pelanggan-pb-m/detail/(:num)', 'Manager\DatPelPB::detail/$1');
$routes->get('uploads/(:any)', 'Manager\DatPelPB::serveFile/$1');

$routes->post('/filter-tindak-lanjut-pb-m', 'Manager\TindakLanjutManagerPB::filter');

$routes->get('/tindak-lanjut-pb-m', 'Manager\TindakLanjutManagerPB::index');
$routes->get('/tindak-lanjut-pb-m/edit/(:num)', 'Manager\TindakLanjutManagerPB::edit/$1');
$routes->post('/tindak-lanjut-pb-m/update/(:num)', 'Manager\TindakLanjutManagerPB::update/$1');
$routes->get('/tindak-lanjut-pb-m/delete/(:num)', 'Manager\TindakLanjutManagerPB::delete/$1');
$routes->get('/tindak-lanjut-pb-m/detail/(:num)', 'Manager\TindakLanjutManagerPB::detail/$1');

$routes->post('/filter-selesai-pb-m', 'Manager\SelesaiPB::filterselesai');
$routes->get('/export/(:any)/(:any)', 'Manager\SelesaiPB::export/$1/$2');

$routes->get('/selesai-pb-m', 'Manager\SelesaiPB::index');
$routes->get('/selesai-pb-m/detail/(:num)', 'Manager\SelesaiPB::detail/$1');

//perubahan daya
$routes->get('/dashboard-pd-m', 'Manager\DashboardPD::index');
$routes->get('/data-pelanggan-pd-m', 'Manager\DatPelPD::index');
$routes->get('/data-pelanggan-pd-m/tambah', 'Manager\DatPelPD::tambah');
$routes->post('/simpan-data-pd-m', 'Manager\DatPelPD::simpan');
$routes->get('/data-pelanggan-pd-m/edit/(:num)', 'Manager\DatPelPD::edit/$1');
$routes->post('/data-pelanggan-pd-m/update/(:num)', 'Manager\DatPelPD::update/$1');
$routes->get('data-pelanggan-pd-m/delete/(:num)', 'Manager\DatPelPD::delete/$1');
$routes->get('/data-pelanggan-pd-m/detail/(:num)', 'Manager\DatPelPD::detail/$1');
$routes->get('uploads/(:any)', 'Manager\DatPelPD::serveFile/$1');

$routes->post('/filter-tindak-lanjut-pd-m', 'Manager\TindakLanjutManagerPD::filter');

$routes->get('/tindak-lanjut-pd-m', 'Manager\TindakLanjutManagerPD::index');
$routes->get('/tindak-lanjut-pd-m/edit/(:num)', 'Manager\TindakLanjutManagerPD::edit/$1');
$routes->post('/tindak-lanjut-pd-m/update/(:num)', 'Manager\TindakLanjutManagerPD::update/$1');
$routes->get('/tindak-lanjut-pd-m/delete/(:num)', 'Manager\TindakLanjutManagerPD::delete/$1');
$routes->get('/tindak-lanjut-pd-m/detail/(:num)', 'Manager\TindakLanjutManagerPD::detail/$1');

$routes->post('/filter-selesai-pd-m', 'Manager\SelesaiPD::filterselesai');
$routes->get('/exportPD/(:any)/(:any)', 'Manager\SelesaiPD::export/$1/$2');

$routes->get('/selesai-pd-m', 'Manager\SelesaiPD::index');
$routes->get('/selesai-pd-m/detail/(:num)', 'Manager\SelesaiPD::detail/$1');
