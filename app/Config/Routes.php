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

$routes->get('/dashboard', 'AdminController::dashboard',['filter' => 'authGuard']);
$routes->get('/products', 'AdminController::viewProducts',['filter' => 'authGuard']);
$routes->post('saveProduct', 'AdminController::addProduct',['filter' => 'authGuard']);
$routes->get('deleteProd/(:any)', 'AdminController::deleteProd/$1',['filter' => 'authGuard']);
$routes->get('editProd/(:any)', 'AdminController::editProd/$1',['filter' => 'authGuard']);
$routes->post('editProd/updateProd', 'AdminController::updateProd',['filter' => 'authGuard']);
