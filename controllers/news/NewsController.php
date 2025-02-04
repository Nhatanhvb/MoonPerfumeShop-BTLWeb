<?php
require_once APP_ROOT . '\models\news\News.php';

class NewsController
{
    private $newsModel;
    public function __construct()
    {
        $this->newsModel = new News();
    }

    public function news()
    {
        // newest products
        $news = $this->newsModel->getAllNews();
        include APP_ROOT . '/views/news/news.php';
    }

}