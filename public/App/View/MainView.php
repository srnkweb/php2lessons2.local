<?php
namespace App\View;

class MainView
{
    public const  string MAIN = __DIR__ . '/../templates/index.php';
    public function display(string $current_page, $data = ''): void
    {
        $test = static::MAIN;
        include $test;
    }
}