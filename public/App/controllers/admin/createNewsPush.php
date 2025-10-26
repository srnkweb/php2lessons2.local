<?php
require __DIR__ . '/../../autoload.php';
use App\AdminModels\CreateNewsPush;

$createNewsPush = new CreateNewsPush();
$validateMethodPost = $createNewsPush->validateMethodPost();
$createNewsPush->predicateMethodPost($validateMethodPost);
$current_page = basename($_SERVER['SCRIPT_NAME']);
$headlineNews = $_POST['headlineNews'];
$mainPartNews = $_POST['mainPartNews'];

