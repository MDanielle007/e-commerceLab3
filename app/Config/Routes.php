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
$routes->get('/cart', 'ShopMainController::cart');
$routes->get('product/(:any)', 'ShopMainController::singleProduct/$1');

$routes->get('/login', 'UserController::loginPage');
$routes->get('/signup', 'UserController::signupPage');
$routes->post('/registerAcc', 'UserController::register');
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->get('/logout', 'UserController::logout');

// $routes->group('admin',['filter' => 'authGuard'], function($routes){
//     $routes->get('/dashboard', 'AdminController::dashboard');
// });

$routes->get('dashboard', 'AdminController::index');
$routes->get('/products', 'AdminController::viewProducts');