<?php

require __DIR__ . '/../../autoload.php';

use App\View\Article;

$view = new Article();
$current_page = 'article.php';
$data = \App\Models\Article::findById();
if(empty($data)){
    $article = new \App\Models\Article();
    $article->getDataIfEmpty();
    $data = array($article);
}
$view ->display($current_page, $data);
