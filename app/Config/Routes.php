<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('about', 'About::index', ['as' => 'about']);
$routes->get('services', 'Services::index', ['as' => 'services']);
$routes->get('technical', 'Technical::index', ['as' => 'technical']);
$routes->get('logistics', 'Logistics::index', ['as' => 'logistics']);
$routes->get('faq', 'Faq::index', ['as' => 'faq']);
$routes->get('contact', 'Contact::index', ['as' => 'contact']);

$routes->get('login', 'Auth::login', ['as' => 'login']);
$routes->post('login', 'Auth::attemptLogin');
$routes->get('logout', 'Auth::logout', ['as' => 'logout']);

$routes->get('api/publications', 'Api::publications');

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('dashboard', 'Dashboard::index', ['as' => 'dashboard']);

    $routes->get('admin/publications', 'Admin\Publications::index');
    $routes->get('admin/publications/new', 'Admin\Publications::create');
    $routes->post('admin/publications', 'Admin\Publications::store');
    $routes->get('admin/publications/(:num)/edit', 'Admin\Publications::edit/$1');
    $routes->post('admin/publications/(:num)', 'Admin\Publications::update/$1');
    $routes->post('admin/publications/(:num)/delete', 'Admin\Publications::delete/$1');

    $routes->get('admin/profile', 'Admin\Profile::index');
    $routes->post('admin/profile', 'Admin\Profile::update');
    $routes->post('admin/profile/password', 'Admin\Profile::changePassword');

    $routes->get('admin/faqs', 'Admin\Faqs::index');
    $routes->get('admin/faqs/new', 'Admin\Faqs::create');
    $routes->post('admin/faqs', 'Admin\Faqs::store');
    $routes->get('admin/faqs/(:num)/edit', 'Admin\Faqs::edit/$1');
    $routes->post('admin/faqs/(:num)', 'Admin\Faqs::update/$1');
    $routes->post('admin/faqs/(:num)/delete', 'Admin\Faqs::delete/$1');
});
