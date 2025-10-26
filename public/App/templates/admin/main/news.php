<main class="mainNewsAdmin">
<div class="newsContent">
    <h1>Выберите нужное действие во вторичном боковом меню.</h1>
</div>
    <div class="sideBarCategories">
        <a
           href="http://php2lessons2.local/App/adminControllers/mainPage.php"
           class="button-nav button-news">Все категории
        </a>
        <a
            href="<?= ($current_page == 'news.php') ? '#' :
            'http://php2lessons2.local/App/adminControllers/mainPage.php' ?>"
           class="button-nav button-news
           <?=  ($current_page == 'news.php') ? 'active': 'hoverNav'; ?>">Новости
        </a>
    </div>
    <div class="sideBarNews">
        <a href="" class="button-nav button-news
           <?=  ($current_page == 'news.php') ? 'active': 'hoverNav'; ?>">Все действия</a>
        <a href="http://php2lessons2.local/App/adminControllers/createNews.php"
           class="button-nav button-news">Создать</a>
        <a href="" class="button-nav button-news">Прочитать</a>
        <a href="" class="button-nav button-news">Обновить</a>
        <a href="" class="button-nav button-news">Удалить</a>
    </div>
</main>