<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('admin', function ($routes) {
    $routes->get('/', 'Home::index');
});

$routes->group('admin/kpm', function ($routes) {
    $routes->get('/', 'Home::index-kpm');
    $routes->get('/create-kpm', 'Home::create-kpm');
    $routes->post('/add-kpm', 'Home::add-kpm');
    $routes->get('/edit-kpm/(:segment)', 'Home::edit-kpm/$1');
    $routes->post('/update-kpm/(:segment)', 'Home::update-kpm/$1');
    $routes->get('/delete-kpm/(:segment)', 'Home::delete-kpm/$1');
});

$routes->group('admin/ag', function ($routes) {
    $routes->get('/', 'Home::index-ag');
    $routes->get('/create-ag', 'Home::create-ag');
    $routes->post('/add-ag', 'Home::add-ag');
    $routes->get('/edit-ag/(:segment)', 'Home::edit-ag/$1');
    $routes->post('/update-ag/(:segment)', 'Home::update-ag/$1');
    $routes->get('/delete-ag/(:segment)', 'Home::delete-ag/$1');
});

$routes->group('admin/ak', function ($routes) {
    $routes->get('/', 'Home::index-ak');
    $routes->get('/create-ak', 'Home::create-ak');
    $routes->post('/add-ak', 'Home::add-ak');
    $routes->get('/edit-ak/(:segment)', 'Home::edit-ak/$1');
    $routes->post('/update-ak/(:segment)', 'Home::update-ak/$1');
    $routes->get('/delete-ak/(:segment)', 'Home::delete-ak/$1');
});

$routes->group('admin/ad', function ($routes) {
    $routes->get('/', 'Home::index-ad');
    $routes->get('/create-ad', 'Home::create-ad');
    $routes->post('/add-ad', 'Home::add-ad');
    $routes->get('/edit-ad/(:segment)', 'Home::edit-ad/$1');
    $routes->post('/update-ad/(:segment)', 'Home::update-ad/$1');
    $routes->get('/delete-ad/(:segment)', 'Home::delete-ad/$1');
});

$routes->group('admin/tp', function ($routes) {
    $routes->get('/', 'Home::index-tp');
    $routes->get('/create-tp', 'Home::create-tp');
    $routes->post('/add-tp', 'Home::add-tp');
    $routes->get('/edit-tp/(:segment)', 'Home::edit-tp/$1');
    $routes->post('/update-tp/(:segment)', 'Home::update-tp/$1');
    $routes->get('/delete-tp/(:segment)', 'Home::delete-tp/$1');
});

$routes->group('admin/so', function ($routes) {
    $routes->get('/', 'Home::index-so');
    $routes->get('/create-so', 'Home::create-so');
    $routes->post('/add-so', 'Home::add-so');
    $routes->get('/edit-so/(:segment)', 'Home::edit-so/$1');
    $routes->post('/update-so/(:segment)', 'Home::update-so/$1');
    $routes->get('/delete-so/(:segment)', 'Home::delete-so/$1');
});

$routes->group('admin/do', function ($routes) {
    $routes->get('/', 'Home::index-do');
    $routes->get('/create-do', 'Home::create-do');
    $routes->post('/add-do', 'Home::add-do');
    $routes->get('/edit-do/(:segment)', 'Home::edit-do/$1');
    $routes->post('/update-do/(:segment)', 'Home::update-do/$1');
    $routes->get('/delete-do/(:segment)', 'Home::delete-do/$1');
});

$routes->group('admin/spm', function ($routes) {
    $routes->get('/', 'Home::index-spm');
    $routes->get('/create-spm', 'Home::create-spm');
    $routes->post('/add-spm', 'Home::add-spm');
    $routes->get('/edit-spm/(:segment)', 'Home::edit-spm/$1');
    $routes->post('/update-spm/(:segment)', 'Home::update-spm/$1');
    $routes->get('/delete-spm/(:segment)', 'Home::delete-spm/$1');
});

$routes->group('admin/ba', function ($routes) {
    $routes->get('/', 'Home::index-ba');
    $routes->get('/create-ba', 'Home::create-ba');
    $routes->post('/add-ba', 'Home::add-ba');
    $routes->get('/edit-ba/(:segment)', 'Home::edit-ba/$1');
    $routes->post('/update-ba/(:segment)', 'Home::update-ba/$1');
    $routes->get('/delete-ba/(:segment)', 'Home::delete-ba/$1');
});

$routes->group('admin/sj', function ($routes) {
    $routes->get('/', 'Home::index-sj');
    $routes->get('/create-sj', 'Home::create-sj');
    $routes->post('/add-sj', 'Home::add-sj');
    $routes->get('/edit-sj/(:segment)', 'Home::edit-sj/$1');
    $routes->post('/update-sj/(:segment)', 'Home::update-sj/$1');
    $routes->get('/delete-sj/(:segment)', 'Home::delete-sj/$1');
});

$routes->group('admin/tt', function ($routes) {
    $routes->get('/', 'Home::index-tt');
    $routes->get('/create-tt', 'Home::create-tt');
    $routes->post('/add-tt', 'Home::add-tt');
    $routes->get('/edit-tt/(:segment)', 'Home::edit-tt/$1');
    $routes->post('/update-tt/(:segment)', 'Home::update-tt/$1');
    $routes->get('/delete-tt/(:segment)', 'Home::delete-tt/$1');
});

$routes->group('admin/sptjm', function ($routes) {
    $routes->get('/', 'Home::index-sptjm');
    $routes->get('/create-sptjm', 'Home::create-sptjm');
    $routes->post('/add-sptjm', 'Home::add-sptjm');
    $routes->get('/edit-sptjm/(:segment)', 'Home::edit-sptjm/$1');
    $routes->post('/update-sptjm/(:segment)', 'Home::update-sptjm/$1');
    $routes->get('/delete-sptjm/(:segment)', 'Home::delete-sptjm/$1');
});

 ?>

