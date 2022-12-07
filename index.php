<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];
$parsedUrl = parse_url($uri)['path'];

//if ($parsedUrl == '/') {
//    require 'controllers/index.php';
//} else if ($parsedUrl == '/about') {
//    require 'controllers/about.php';
//} else if ($parsedUrl == '/contact') {
//    require 'controllers/contact.php';
//}

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

if (array_key_exists($parsedUrl, $routes)) {
    require $routes[$parsedUrl];
} else {
    http_response_code(404);

    require ('views/not_found.php');
    die();
}
