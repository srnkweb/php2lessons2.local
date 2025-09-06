<?php

namespace App\AdminView;

use App\View\MainView;

class CreateNews extends MainView
{
    public  string $header = '/header/createNews.php';
    public  string $content = '/main/createNews.php';
    public const string MAIN = __DIR__ . '/../adminTemplates/mainPage.php';
}