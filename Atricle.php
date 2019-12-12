<?php
    require_once("DB.php");
    require_once("Models/wwarticles.php");

    $link = db_connect();
    $article = articles_get($link, $_GET['id']);

    include("views/article.php")
?>