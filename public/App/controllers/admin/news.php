<?php

require __DIR__ . '/../../autoload.php';

use App\AdminView\News;

$news = new News();
$current_page = basename($_SERVER['SCRIPT_NAME']);
//var_dump($current_page);
$news->display($current_page);

