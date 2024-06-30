<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

$routes->group('login', function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});


$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->group('kuisioner', ['filter' => 'auth'], function($routes) {
    $routes->match(['GET', 'POST'], 'biodata', 'KuisionerController::biodata');
    $routes->match(['GET', 'POST'], 'visi_misi', 'KuisionerController::visi_misi');
    $routes->match(['GET', 'POST'], 'layanan_akademik', 'KuisionerController::layanan_akademik');
    $routes->match(['GET', 'POST'], 'layanan_kemahasiswaan', 'KuisionerController::layanan_kemahasiswaan');
    $routes->post('submit', 'KuisionerController::submit');
    $routes->get('selesai', 'KuisionerController::selesai');
});