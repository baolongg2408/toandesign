<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('project/(:segment)', 'Projects::show/$1');
$routes->get('/', 'Home::index');
$routes->get('profile', 'Profile::index');
$routes->get('ping', fn() => 'pong');


