<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login_sistem', 'Auth::index');
$routes->get('/registrasi', 'Auth::regis');
