<?php

namespace App\AdminView;

use App\View\MainView;

class News extends MainView
{
    public  string $header = '/header/news.php';
    public  string $content = '/main/news.php';
    public const string MAIN = __DIR__ . '/../adminTemplates/mainPage.php';
}