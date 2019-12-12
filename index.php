<?php
    session_start();
    require_once("db.php");
    require_once("models/wwarticles.php");

    $link = db_connect();
    $articles = articles($link);

    include("views/articles.php");
?>