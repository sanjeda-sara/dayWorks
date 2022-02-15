<?php

require_once 'vendor/autoload.php';
use App\Classes\Category;
use App\Classes\News;


if(isset($_GET['pages']))
{
    if ($_GET['pages']=='all-news')
    {
        $category   = new Category;
        $categories = $category->category();
        $news    = new News();
        $news   = $news->index();
        include 'pages/allNews.php';
    }
    elseif ($_GET['pages'] == 'category-news')
    {
        $category   = new Category;
        $categories = $category->category();
        $category           = new Category;
        $categories         = $category->category();
        $news            = new News();
        $newsDetails     = $news->getNewsDetails($_GET['news_id']);
        //                              this is my parameter, product er id dhore niye ashbo
        include 'pages/newsDetails.php';
    }
}


