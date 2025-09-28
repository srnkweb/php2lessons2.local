<?php
/*require __DIR__ . '/App/core/ValidateUrl.php';
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
}*/

// Подключаем утилиты
require __DIR__ . '/App/core/ValidateUrl.php';
require __DIR__ . '/autoload.php';

// Обработка GET параметров
$controller = sanitizeInput($_GET['controller'] ?? '');
$id = $_GET['id'] ?? '';

// Белый список контроллеров
$allowed_controllers = ['article', 'news', 'index', ''];

// Проверка контроллера
if (!in_array($controller, $allowed_controllers)) {
    show404();
}

// Валидация ID
if ($id !== '') {
    $validatedId = validateId($id);
    if (!$validatedId) {
        http_response_code(400);
        echo 'Неверный ID';
        exit;
    }
    $id = $validatedId;
} else {
    $id = null;
}

// Подключаем контроллер
switch ($controller) {
    case 'article':
        require __DIR__ . '/App/controllers/article.php';
        break;
    case 'news':
        require __DIR__ . '/App/controllers/news.php';
        break;
    case '':
    case 'index':
        require __DIR__ . '/App/controllers/index.php';
        break;
    default:
        show404();
        break;
}