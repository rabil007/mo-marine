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

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('dashboard', 'Dashboard::index', ['as' => 'dashboard']);
});
