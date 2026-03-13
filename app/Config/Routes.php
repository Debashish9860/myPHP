<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Home::login');
// $routes->get('/contact', 'Home::contact');
// $routes->setAutoRoute(true);


$routes->get("/", "AuthController::index");
$routes->get("register", "AuthController::register");
$routes->post("register-user", "AuthController::storeUser");
$routes->get("dashboard", "AuthController::dashboard");
$routes->get("contact", "AuthController::contact");