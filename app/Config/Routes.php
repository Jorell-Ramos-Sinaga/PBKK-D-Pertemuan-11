<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 * Definisi Route Aplikasi ShopEase Landing Page
 */
$routes->get('/', 'HomeController::index', ['as' => 'home']);
$routes->get('/about', 'AboutController::index', ['as' => 'about']);
$routes->get('/contact', 'ContactController::index', ['as' => 'contact']);
$routes->post('/contact/send', 'ContactController::send', ['as' => 'contact.send']);

// Authentication Routes
$routes->get('register', 'AuthController::register', ['as' => 'register']);
$routes->post('register', 'AuthController::store', ['as' => 'register.store']);
$routes->get('login', 'AuthController::login', ['as' => 'login']);
$routes->post('login', 'AuthController::authenticate', ['as' => 'login.authenticate']);
$routes->post('logout', 'AuthController::logout', ['as' => 'logout']);

// Halaman Terlindungi (Placeholder Dashboard Role)
$routes->group('admin', ['filter' => 'auth:admin'], static function ($routes) {
    $routes->get('/', 'Admin\DashboardController::index', ['as' => 'admin.dashboard']);
});
$routes->group('operator', ['filter' => 'auth:operator'], static function ($routes) {
    $routes->get('/', 'Operator\DashboardController::index', ['as' => 'operator.dashboard']);
});
