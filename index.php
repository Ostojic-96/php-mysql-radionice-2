<?php
$movies = [
    [
        'name' => 'Sam u kuci',
        'year' => 2000,
        'url' => 'https://example.com'
    ],
    [
        'name' => 'LOTR',
        'year' => 2010,
        'url' => 'https://example.com'

    ],
    [
        'name' => 'Avatar 2',
        'year' => 2020,
        'url' => 'https://example.com'
    ]
];

$newMovies = [];
foreach ($movies as $movie) {
    if ($movie['year'] >= 2020) {
        array_push($newMovies, $movie);
    }
}

$pageTitle = 'Početna stranica';

require "functions.php";
require "views/index.view.php";
