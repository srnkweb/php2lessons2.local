<?php
session_start();

if (empty($_SESSION['csrf_token'])) {
    try {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    } catch (Exception $e) {
        $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
?>
<main class="mainPageAdmin">
    <div class="mainContent">
       <form action="http://php2lessons2.local/App/adminControllers/createNewsPush.php"
             class="formCreationNews" method="post"  enctype="multipart/form-data">
            <div class="headlineNews">
                <label for="headlineNews">Заголовок новости:</label>
                <textarea name="headlineNews" id="headlineNews"></textarea>
            </div>
            <div class="mainPartNews">
                <label for="mainPartNews">Основная часть:</label>
                <textarea  name="mainPartNews" id="mainPartNews"></textarea>
            </div>
           <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
           <div class="sendNews">
               <input type="submit" value="Отправить">
           </div>
       </form>
    </div>
    <div class="sideBarCategories">
        <a
            href="http://php2lessons2.local/App/adminControllers/mainPage.php   "
            class="button-nav button-news">Все категории
        </a>
        <a href="#"
           class="button-nav button-news
             <?=  ($current_page == 'createNews.php') ? 'active': 'hoverNav'; ?>">Новости</a>
    </div>
    <div class="sideBarNews">
        <a href="http://php2lessons2.local/App/adminControllers/news.php"
           class="button-nav button-news">Все действия</a>
        <a href="#"
           class="button-nav button-news
           <?=  ($current_page == 'createNews.php') ? 'active': 'hoverNav'; ?>">Создать</a>
    </div>
</main>
