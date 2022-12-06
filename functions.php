<?php

function dd($argument) {
    echo '<pre>';
    var_dump($argument);
    echo '</pre>';
    die();
}
