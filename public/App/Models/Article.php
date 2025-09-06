<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    public int $id;
    public string $title;
    public string $article;

    const string SQL = 'SELECT * FROM news WHERE id = :id';

    public function getDataIfEmpty():void
    {
        $this->id = $_GET['id'];
        $this->title = 'Нет новости под выбранным номером.';
        $this->article = 'Перейдите к списку новостей.';
    }

}