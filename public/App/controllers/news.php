<?php

require __DIR__ . '/../../autoload.php';

use App\View\News;

$view = new News();
$current_page = basename($_SERVER['SCRIPT_NAME']);
$data = \App\Models\News::FindAll();
//var_dump($current_page);
$view ->display($current_page, $data);
