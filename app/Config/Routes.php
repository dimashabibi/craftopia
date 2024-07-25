<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//pages
$routes->get('/', 'Home::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');
$routes->get('/ideas', 'Pages::ideas');
$routes->get('/article_home', 'Pages::article_home');
$routes->get('/error', 'Pages::error');

// profil
$routes->get('/profil', 'User::index');
$routes->get('/edit_personal/(:num)', 'User::edit_personal/$1');
$routes->post('/update_personal/(:num)', 'User::update_personal/$1');

//komik
$routes->get('/komik', 'Komik::index');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');


//project
$routes->get('/your_project', 'Project::your_project');
$routes->post('/save', 'Project::save');
$routes->get('/create_project', 'Project::create');
$routes->get('/project_create', 'Project::create_project');
$routes->post('/project/update/(:num)', 'Project::update/$1');
$routes->get('/project/edit/(:segment)', 'Project::edit/$1');
$routes->get('delete_project/(:num)', 'Project::delete/$1');
$routes->get('/your_project/detail/(:segment)', 'project::your_detail/$1');
$routes->get('/project', 'Project::index');
$routes->get('/project/detail/(:segment)', 'project::detail/$1');


//auth
$routes->post('login', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->get('register_user', 'Auth::form_register');
$routes->post('proses_register_user', 'Auth::proses_register_user');
$routes->get('activate/(:any)', 'Auth::activate/$1');
$routes->get('lupa_password', 'Auth::lupa_password');
$routes->post('proses_lupa_password', 'Auth::proses_lupa_password');



//admin
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('logout', 'admin::logout');
    $routes->get('', 'Admin::index');
    $routes->get('komik', 'Admin::komik');
    $routes->get('komik_detail/(:segment)', 'Admin::detail/$1');
    $routes->get('project', 'Admin::project');
    $routes->get('project_detail/(:segment)', 'Admin::detail_project/$1');
    $routes->get('delete_project/(:num)', 'Admin::delete/$1');
    $routes->get('user', 'Admin::user');
    $routes->get('edit_user/(:num)', 'Admin::edit_user/$1');
    $routes->post('update_user/(:num)', 'Admin::update_user/$1');
    $routes->get('delete_user/(:num)', 'Admin::delete_user/$1');
    $routes->get('ganti_password', 'Auth::ganti_password');
    $routes->post('proses_ganti_password', 'Auth::proses_ganti_password');
});
