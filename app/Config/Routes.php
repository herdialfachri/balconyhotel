<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontController::index');
$routes->get('/room', 'FrontController::room');
$routes->get('/about_us', 'FrontController::about_us');
$routes->get('/contact', 'FrontController::contact');
$routes->get('/booking', 'FrontController::booking');

$routes->get('/masuk', 'LoginController::index');