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
$routes->post("loginCheck", "AuthController::login");
$routes->get("dashboard", "AuthController::dashboard");