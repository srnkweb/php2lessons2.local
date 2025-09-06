<header>
    <nav>
        <a href="<?= $current_page == 'createNews.php' ? '#' :
            'http://php2lessons2.local/App/adminControllers/mainPage.php' ?>"
           class=" button-nav <?=  $current_page == 'createNews.php' ? 'active': 'hoverNav'; ?>" >
            Управление контентом сайта
        </a>
        <a href="http://php2lessons2.local/"
           class=" button-nav hoverNav">
            Выйти из управления сайтом</a>
    </nav>
</header>