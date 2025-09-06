<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/App/css/style.css">
    <title>Курс №2 Урок №2</title>
</head>
<body>
    <?php include_once __DIR__ . $this->header;?>
    <?php include_once  __DIR__ . $this->content;?>
<footer>
    <p>Урок №2 второго курса PHP</p>
</footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.querySelector('#mainPartNews');
            const MAX_HEIGHT = 500; // Максимальная высота в пикселях

            function adjustHeight() {
                textarea.style.height = 'auto';
                const newHeight = Math.min(textarea.scrollHeight, MAX_HEIGHT);
                textarea.style.height = newHeight + 'px';

                // Показываем скролл если достигнут максимум
                textarea.style.overflowY = textarea.scrollHeight > MAX_HEIGHT ? 'auto' : 'hidden';
            }

            // Инициализация
            adjustHeight();

            // Обработка ввода
            textarea.addEventListener('input', adjustHeight);

            // Обработка изменения размера окна (на всякий случай)
            window.addEventListener('resize', adjustHeight);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.querySelector('#headlineNews');
            const MAX_HEIGHT = 500; // Максимальная высота в пикселях

            function adjustHeight() {
                textarea.style.height = 'auto';
                const newHeight = Math.min(textarea.scrollHeight, MAX_HEIGHT);
                textarea.style.height = newHeight + 'px';

                // Показываем скролл если достигнут максимум
                textarea.style.overflowY = textarea.scrollHeight > MAX_HEIGHT ? 'auto' : 'hidden';
            }

            // Инициализация
            adjustHeight();

            // Обработка ввода
            textarea.addEventListener('input', adjustHeight);

            // Обработка изменения размера окна (на всякий случай)
            window.addEventListener('resize', adjustHeight);
        });
    </script>
</body>
</html>
