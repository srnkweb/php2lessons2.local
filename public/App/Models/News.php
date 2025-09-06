<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    public int $id;
    public string $title;
    public string $article;
    const string SQL = 'SELECT * FROM news ORDER BY id DESC LIMIT 3';
}