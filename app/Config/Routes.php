<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('admin', function ($routes) {
    $routes->get('/', 'AdminController::index');
    // KPM
    $routes->get('kpm', 'AdminController::index_kpm');
    $routes->get('kpm/create', 'AdminController::create_kpm');
    $routes->post('kpm/add', 'AdminController::add_kpm');
    $routes->get('kpm/detail/(:segment)', 'AdminController::detail_kpm/$1');
    $routes->post('kpm/update/(:segment)', 'AdminController::update_kpm/$1');
    $routes->get('kpm/delete/(:segment)', 'AdminController::delete_kpm/$1');
    // Admin Gudang
    $routes->get('ag', 'AdminController::index_ag');
    $routes->get('ag/create', 'AdminController::create_ag');
    $routes->post('ag/add', 'AdminController::add_ag');
    $routes->get('ag/detail/(:segment)', 'AdminController::detail_ag/$1');
    $routes->post('ag/update/(:segment)', 'AdminController::update_ag/$1');
    $routes->get('ag/delete/(:segment)', 'AdminController::delete_ag/$1');
});

$routes->group('admin/ak', function ($routes) {
    $routes->get('/', 'AdminController::index-ak');
    $routes->get('/create-ak', 'AdminController::create-ak');
    $routes->post('/add-ak', 'AdminController::add-ak');
    $routes->get('/edit-ak/(:segment)', 'AdminController::edit-ak/$1');
    $routes->post('/update-ak/(:segment)', 'AdminController::update-ak/$1');
    $routes->get('/delete-ak/(:segment)', 'AdminController::delete-ak/$1');
});

$routes->group('admin/ad', function ($routes) {
    $routes->get('/', 'AdminController::index-ad');
    $routes->get('/create-ad', 'AdminController::create-ad');
    $routes->post('/add-ad', 'AdminController::add-ad');
    $routes->get('/edit-ad/(:segment)', 'AdminController::edit-ad/$1');
    $routes->post('/update-ad/(:segment)', 'AdminController::update-ad/$1');
    $routes->get('/delete-ad/(:segment)', 'AdminController::delete-ad/$1');
});

$routes->group('admin/tp', function ($routes) {
    $routes->get('/', 'AdminController::index-tp');
    $routes->get('/create-tp', 'AdminController::create-tp');
    $routes->post('/add-tp', 'AdminController::add-tp');
    $routes->get('/edit-tp/(:segment)', 'AdminController::edit-tp/$1');
    $routes->post('/update-tp/(:segment)', 'AdminController::update-tp/$1');
    $routes->get('/delete-tp/(:segment)', 'AdminController::delete-tp/$1');
});

$routes->group('admin/so', function ($routes) {
    $routes->get('/', 'AdminController::index-so');
    $routes->get('/create-so', 'AdminController::create-so');
    $routes->post('/add-so', 'AdminController::add-so');
    $routes->get('/edit-so/(:segment)', 'AdminController::edit-so/$1');
    $routes->post('/update-so/(:segment)', 'AdminController::update-so/$1');
    $routes->get('/delete-so/(:segment)', 'AdminController::delete-so/$1');
});

$routes->group('admin/do', function ($routes) {
    $routes->get('/', 'AdminController::index-do');
    $routes->get('/create-do', 'AdminController::create-do');
    $routes->post('/add-do', 'AdminController::add-do');
    $routes->get('/edit-do/(:segment)', 'AdminController::edit-do/$1');
    $routes->post('/update-do/(:segment)', 'AdminController::update-do/$1');
    $routes->get('/delete-do/(:segment)', 'AdminController::delete-do/$1');
});

$routes->group('admin/spm', function ($routes) {
    $routes->get('/', 'AdminController::index-spm');
    $routes->get('/create-spm', 'AdminController::create-spm');
    $routes->post('/add-spm', 'AdminController::add-spm');
    $routes->get('/edit-spm/(:segment)', 'AdminController::edit-spm/$1');
    $routes->post('/update-spm/(:segment)', 'AdminController::update-spm/$1');
    $routes->get('/delete-spm/(:segment)', 'AdminController::delete-spm/$1');
});

$routes->group('admin/ba', function ($routes) {
    $routes->get('/', 'AdminController::index-ba');
    $routes->get('/create-ba', 'AdminController::create-ba');
    $routes->post('/add-ba', 'AdminController::add-ba');
    $routes->get('/edit-ba/(:segment)', 'AdminController::edit-ba/$1');
    $routes->post('/update-ba/(:segment)', 'AdminController::update-ba/$1');
    $routes->get('/delete-ba/(:segment)', 'AdminController::delete-ba/$1');
});

$routes->group('admin/sj', function ($routes) {
    $routes->get('/', 'AdminController::index-sj');
    $routes->get('/create-sj', 'AdminController::create-sj');
    $routes->post('/add-sj', 'AdminController::add-sj');
    $routes->get('/edit-sj/(:segment)', 'AdminController::edit-sj/$1');
    $routes->post('/update-sj/(:segment)', 'AdminController::update-sj/$1');
    $routes->get('/delete-sj/(:segment)', 'AdminController::delete-sj/$1');
});

$routes->group('admin/tt', function ($routes) {
    $routes->get('/', 'AdminController::index-tt');
    $routes->get('/create-tt', 'AdminController::create-tt');
    $routes->post('/add-tt', 'AdminController::add-tt');
    $routes->get('/edit-tt/(:segment)', 'AdminController::edit-tt/$1');
    $routes->post('/update-tt/(:segment)', 'AdminController::update-tt/$1');
    $routes->get('/delete-tt/(:segment)', 'AdminController::delete-tt/$1');
});

$routes->group('admin/sptjm', function ($routes) {
    $routes->get('/', 'AdminController::index-sptjm');
    $routes->get('/create-sptjm', 'AdminController::create-sptjm');
    $routes->post('/add-sptjm', 'AdminController::add-sptjm');
    $routes->get('/edit-sptjm/(:segment)', 'AdminController::edit-sptjm/$1');
    $routes->post('/update-sptjm/(:segment)', 'AdminController::update-sptjm/$1');
    $routes->get('/delete-sptjm/(:segment)', 'AdminController::delete-sptjm/$1');
});
