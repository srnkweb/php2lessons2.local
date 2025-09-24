<?php
require __DIR__ . '/autoload.php';
//include __DIR__ . '/App/controllers/index.php';

echo '<br>' . $request = $_SERVER['REQUEST_URI'];
echo '<br>' . $path = explode('?', $request)[0];
echo '<br>' . $path = trim($path, '/');

switch ($path) {
    case '': require __DIR__ . '/App/controllers/index.php';
    break;
    default:
        // Если страница не найдена - 404
        http_response_code(404);
        echo '404 - Страница не найдена';
        break;
}