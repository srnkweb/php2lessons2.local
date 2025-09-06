<?php

require __DIR__ . '/../../autoload.php';

use App\View\index;

$view = new Index();
$current_page = basename($_SERVER['SCRIPT_NAME']);
//var_dump($current_page);
$view ->display($current_page);