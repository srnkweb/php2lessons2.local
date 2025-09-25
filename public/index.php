<?php
require __DIR__ . '/autoload.php';
//include __DIR__ . '/App/controllers/index.php';

$request = $_SERVER['REQUEST_URI'];
$path = explode('?', $request)[0];
$path = trim($path, '/');
// Временный хак для теста - добавьте перед switch:

switch ($path) {
    case '':
        require __DIR__ . '/App/controllers/index.php';
        break;
    case 'news':
        require __DIR__ . '/App/controllers/news.php';
        break;
    default:
        // Если страница не найдена - 404
        http_response_code(404);
        echo '404 - Страница не найдена';
        break;
}