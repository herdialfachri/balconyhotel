<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontController::index');
$routes->get('/room', 'FrontController::room');
$routes->get('/about_us', 'FrontController::about_us');
$routes->get('/contact', 'FrontController::contact');

$routes->get('/booking', 'FrontController::booking', ['filter' => 'auth']);
$routes->post('booking/save', 'BookingController::save');

$routes->get('/masuk', 'AuthController::index');
$routes->get('/keluar', 'AuthController::logout');
$routes->get('/admin', 'BackController::index');

$routes->post('/auth/login', 'AuthController::login');