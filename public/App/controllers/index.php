<?php

//require __DIR__ . '/../../autoload.php';
use App\View\Index;

$view = new Index();
$current_page = 'index.php';
$view ->display($current_page);