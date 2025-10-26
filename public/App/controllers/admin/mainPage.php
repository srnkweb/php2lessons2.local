<?php

require __DIR__ . '/../../autoload.php';

use App\AdminView\MainPage;

$homePage = new MainPage();
$current_page = basename($_SERVER['SCRIPT_NAME']);
//var_dump($current_page);
$homePage->display($current_page);