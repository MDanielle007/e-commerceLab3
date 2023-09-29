<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ShopMainController::index');
$routes->get('/shop', 'ShopMainController::shop');
$routes->get('/about', 'ShopMainController::aboutUs');
$routes->get('/services', 'ShopMainController::shopServices');
$routes->get('/contact', 'ShopMainController::contactSection');