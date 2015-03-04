<?php
use Cake\Routing\Router;

Router::plugin('Sheets', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});