<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('admin', function ($routes) {
    $routes->get('/', 'AdminController::index');
    // Routes KPM //
    $routes->get('kpm/', 'AdminController::index_kpm');
    $routes->get('kpm/create', 'AdminController::create_kpm');
    $routes->post('kpm/add', 'AdminController::add_kpm');
    $routes->get('kpm/edit/(:segment)', 'AdminController::edit_kpm/$1');
    $routes->post('kpm/update/(:segment)', 'AdminController::update_kpm/$1');
    $routes->delete('kpm/delete/(:segment)', 'AdminController::delete_kpm/$1');

    // Routes Admin Gudang //
    $routes->get('ag/', 'AdminController::index_ag');
    $routes->get('ag/create-ag', 'AdminController::create-ag');
    $routes->post('ag/add-ag', 'AdminController::add-ag');
    $routes->get('ag/edit-ag/(:segment)', 'AdminController::edit-ag/$1');
    $routes->post('ag/update-ag/(:segment)', 'AdminController::update-ag/$1');
    $routes->delete('ag/delete-ag/(:segment)', 'AdminController::delete-ag/$1');
    

    // Routes Admin Kecamatan //
    $routes->get('ak/', 'AdminController::index_ak');
    $routes->get('ak/create-ak', 'AdminController::create_ak');
    $routes->post('ak/add-ak', 'AdminController::add_ak');
    $routes->get('ak/edit-ak/(:segment)', 'AdminController::edit_ak/$1');
    $routes->post('ak/update-ak/(:segment)', 'AdminController::update_ak/$1');
    $routes->delete('ak/delete-ak/(:segment)', 'AdminController::delete_ak/$1');

    // Routes Admin Desa //
    $routes->get('ad/', 'AdminController::index-ad');
    $routes->get('ad/create-ad', 'AdminController::create-ad');
    $routes->post('ad/add-ad', 'AdminController::add-ad');
    $routes->get('ad/edit-ad/(:segment)', 'AdminController::edit-ad/$1');
    $routes->post('ad/update-ad/(:segment)', 'AdminController::update-ad/$1');
    $routes->delete('ad/delete-ad/(:segment)', 'AdminController::delete-ad/$1');

    // Routes Admin Team Penyalur //
    $routes->get('tp/', 'AdminController::index-tp');
    $routes->get('tp/create-tp', 'AdminController::create-tp');
    $routes->post('tp/add-tp', 'AdminController::add-tp');
    $routes->get('tp/edit-tp/(:segment)', 'AdminController::edit-tp/$1');
    $routes->post('tp/update-tp/(:segment)', 'AdminController::update-tp/$1');
    $routes->delete('tp/delete-tp/(:segment)', 'AdminController::delete-tp/$1');

    // Routes Dokumen SO //
    $routes->get('so/', 'AdminController::index-so');
    $routes->get('so/create-so', 'AdminController::create-so');
    $routes->post('so/add-so', 'AdminController::add-so');
    $routes->get('so/edit-so/(:segment)', 'AdminController::edit-so/$1');
    $routes->post('so/update-so/(:segment)', 'AdminController::update-so/$1');
    $routes->delete('so/delete-so/(:segment)', 'AdminController::delete-so/$1');

    // Routes Dokumen DO //
    $routes->get('do/', 'AdminController::index-do');
    $routes->get('do/create-do', 'AdminController::create-do');
    $routes->post('do/add-do', 'AdminController::add-do');
    $routes->get('do/edit-do/(:segment)', 'AdminController::edit-do/$1');
    $routes->post('do/update-do/(:segment)', 'AdminController::update-do/$1');
    $routes->delete('do/delete-do/(:segment)', 'AdminController::delete-do/$1');

    // Routes Dokumen SPM //
    $routes->get('spm/', 'AdminController::index-spm');
    $routes->get('spm/create-spm', 'AdminController::create-spm');
    $routes->post('spm/add-spm', 'AdminController::add-spm');
    $routes->get('spm/edit-spm/(:segment)', 'AdminController::edit-spm/$1');
    $routes->post('spm/update-spm/(:segment)', 'AdminController::update-spm/$1');
    $routes->delete('spm/delete-spm/(:segment)', 'AdminController::delete-spm/$1');

    // Routes Dokumen Berita Acara //
    $routes->get('ba/', 'AdminController::index-ba');
    $routes->get('ba/create-ba', 'AdminController::create-ba');
    $routes->post('ba/add-ba', 'AdminController::add-ba');
    $routes->get('ba/edit-ba/(:segment)', 'AdminController::edit-ba/$1');
    $routes->post('ba/update-ba/(:segment)', 'AdminController::update-ba/$1');
    $routes->delete('ba/delete-ba/(:segment)', 'AdminController::delete-ba/$1');

    // Routes Dokumen Surat Jalan //
    $routes->get('sj/', 'AdminController::index-sj');
    $routes->get('sj/create-sj', 'AdminController::create-sj');
    $routes->post('sj/add-sj', 'AdminController::add-sj');
    $routes->get('sj/edit-sj/(:segment)', 'AdminController::edit-sj/$1');
    $routes->post('sj/update-sj/(:segment)', 'AdminController::update-sj/$1');
    $routes->delete('sj/delete-sj/(:segment)', 'AdminController::delete-sj/$1');

    // Routes Dokumen Tanda Terima //
    $routes->get('tt/', 'AdminController::index-tt');
    $routes->get('tt/create-tt', 'AdminController::create-tt');
    $routes->post('tt/add-tt', 'AdminController::add-tt');
    $routes->get('tt/edit-tt/(:segment)', 'AdminController::edit-tt/$1');
    $routes->post('tt/update-tt/(:segment)', 'AdminController::update-tt/$1');
    $routes->delete('tt/delete-tt/(:segment)', 'AdminController::delete-tt/$1');

    // Routes Dokumen SPTJM //
    $routes->get('sptjm/', 'AdminController::index-sptjm');
    $routes->get('sptjm/create-sptjm', 'AdminController::create-sptjm');
    $routes->post('sptjm/add-sptjm', 'AdminController::add-sptjm');
    $routes->get('sptjm/edit-sptjm/(:segment)', 'AdminController::edit-sptjm/$1');
    $routes->post('sptjm/update-sptjm/(:segment)', 'AdminController::update-sptjm/$1');
    $routes->delete('sptjm/delete-sptjm/(:segment)', 'AdminController::delete-sptjm/$1');

    // Routes Authentication //
    $routes->get('login', 'AdminController::login');
    $routes->get('register', 'AdminController::register');
});

