<main class="mainPageAdmin">
<div class="mainContent">
    <h1>Вы на главной странице управления контентом сайта.</h1>
</div>
    <div class="sideBarCategories">
        <a
           href="#"
           class="button-nav button-news
           <?=  ($current_page == 'homePage') ? 'hoverNav': 'active'; ?>">Все категории
        </a>
        <a href="http://php2lessons2.local/App/adminControllers/news.php"
           class="button-nav button-news">Новости</a>
        <a href="" class="button-nav button-news">Пользователи</a>
    </div>
    <div class="sideBarNews">

    </div>
</main>
