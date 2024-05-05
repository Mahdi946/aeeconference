<?php

use App\Controllers\Category;
use App\Controllers\News;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */


service('auth')->routes($routes);

//$routes->group('{locale}', function ($routes) {
//    $routes->get('/', 'Home::index');
//    $routes->get('(:segment)', [Pages::class, 'view']);
//});

$routes->get('/', 'Home::index');
$routes->get('lang/{locale}', 'Language::index');

$routes->get('/news', [News::class, 'index']);
$routes->get('/news/(:segment)', [News::class, 'view']);
$routes->get('/admin/category', [Category::class, 'form']);
$routes->get('/admin/category/all', [Category::class, 'all']);
$routes->post('/admin/category', [Category::class, 'add']);
$routes->put('/admin/category', [Category::class, 'update']);
$routes->delete('/admin/category', [Category::class, 'remove']);
$routes->get('(:segment)', [Pages::class, 'view']);



