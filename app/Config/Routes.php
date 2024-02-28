<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */

 service('auth')->routes($routes);

$routes->group('{locale}', function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('contact', 'Contact::index');
    $routes->get('(:segment)', [Pages::class, 'view']);
});

$routes->get('/', 'Home::index');
$routes->get('contact', 'Contact::index');
$routes->get('(:segment)', [Pages::class, 'view']);




