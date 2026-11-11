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
