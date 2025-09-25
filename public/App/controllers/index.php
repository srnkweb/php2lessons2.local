<?php

require __DIR__ . '/../../autoload.php';

use App\View\index;

$view = new Index();
$current_page = 'index.php';
//var_dump($current_page);
$view ->display($current_page);