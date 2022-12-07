<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

$db = new Database();

$movies = $db->query('select * from movies')->fetchAll(PDO::FETCH_ASSOC);
//dd($movies);


// Data source name
//$dsn = 'mysql:host=localhost;dbname=moviedb';
//$pdo = new PDO($dsn, 'osta', '123456');
//
//$statement = $pdo->prepare("select * from movies");
//$statement->execute();
//
//$movies = $statement->fetchAll(PDO::FETCH_ASSOC);
//foreach ($movies as $movie) {
//    echo $movie['title'];
//    echo '<br>';
//}


