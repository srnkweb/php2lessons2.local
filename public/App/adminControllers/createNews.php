<?php
require __DIR__ . '/../../autoload.php';

use App\AdminView\CreateNews;

$createNews = new CreateNews();
$current_page = basename($_SERVER['SCRIPT_NAME']);
//var_dump($current_page);
$createNews->display($current_page);
