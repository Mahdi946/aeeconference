<?php

use App\Controllers\Category;
use App\Controllers\Logout;
use App\Controllers\News;
use App\Controllers\NewsAdmin;
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

$routes->get('/admin/news', [NewsAdmin::class, 'viewPanel']);
$routes->get('/admin/addNewsEn', [NewsAdmin::class, 'addNewsEn']);
$routes->get('/admin/addNews', [NewsAdmin::class, 'addNews']);
$routes->post('/admin/news', [NewsAdmin::class, 'add']);
$routes->get('/admin/editNews/(:segment)', [NewsAdmin::class, 'editPage']);
$routes->get('/admin/editNewsEn/(:segment)', [NewsAdmin::class, 'editPageEn']);
$routes->put('/admin/news', [NewsAdmin::class, 'update']);
$routes->delete('/admin/news/(:segment)', [NewsAdmin::class, 'remove']);
$routes->get('/admin/logout', [Logout::class, 'index']);
$routes->get('/admin/category', [Category::class, 'form']);
$routes->get('/admin/category/all', [Category::class, 'all']);
$routes->post('/admin/category', [Category::class, 'add']);
$routes->put('/admin/category', [Category::class, 'update']);
$routes->delete('/admin/category', [Category::class, 'remove']);

$routes->get('/news', [News::class, 'index']);
$routes->get('/news/(:segment)', [News::class, 'view']);
$routes->get('/news/img/(:segment)', [News::class, 'image']);
$routes->get('(:segment)', [Pages::class, 'view']);



