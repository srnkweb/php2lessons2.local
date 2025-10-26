<?php
require __DIR__ . '/autoload.php';
use App\classes\Route;
$uri = $_SERVER['REQUEST_URI'];
$path = trim($uri, '/');
$parts = explode('/', $path);
$firstSegmentUrl = $parts[0];

$routerObj = new App\classes\Route();
$routerObj->definitionUserRole($firstSegmentUrl);
$routerObj->dispatchByRole();

