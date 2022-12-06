<?php

function dd($argument) {
    echo '<pre>';
    var_dump($argument);
    echo '</pre>';
    die();
}

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}
