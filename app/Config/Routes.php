<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('productos', 'Producto::index');
$routes->post('productos', 'Producto::create');
$routes->put('productos/(:num)', 'Producto::update/$1');
$routes->delete('productos/(:num)', 'Producto::delete/$1');
