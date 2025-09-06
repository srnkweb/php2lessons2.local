<?php

namespace App\AdminView;

use App\View\MainView;

class MainPage extends MainView
{
    public  string $header = '/header/mainPage.php';
    public  string $content = '/main/mainPage.php';
    public const string MAIN = __DIR__ . '/../adminTemplates/mainPage.php';
}