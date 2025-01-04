<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontController::index');
$routes->get('/room', 'FrontController::room');

$routes->get('/admin_balcony', 'BackController::index');