<header>
    <nav>
<a href="<?= ($current_page == 'index.php') ? '#' : '/index.php' ?>"
   class=" button-nav <?= ($current_page == 'index.php') ? 'active': 'hoverNav';?>" >Домашнее задание
</a>
<a href="<?= ($current_page == 'news.php') ? '#' : 'App/controllers/news.php' ?>"
   class=" button-nav <?= ($current_page == 'news.php') ? 'active': 'hoverNav'; ?>">
    Посмотреть все новости</a>
    </nav>
</header>
