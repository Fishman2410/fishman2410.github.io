<?
session_start();
    require_once("../DB.php");
    require_once("../models/wwarticles.php");

    $link = db_connect();


    if(isset($_GET['action']))
        $action=$_GET['action'];
    else
        $action="";
    
    if($action=="add"){
        if(!empty($_POST)){
            articles_new($link, $_POST['title'], $_POST['date'], $_SESSION['user'], $_POST['image'], $_POST['content']);
            header("Location: admin.php");
        }
        include("../views/article_admin.php");
    }else if($action=="edit"){
        if(!isset($_GET['id']))
            header("Location: admin.php");
        $id = (int)$_GET['id'];
        
        if(!empty($_POST)&& $id > 0){
            articles_edit($link, $id, $_POST['title'], $_SESSION['user'], $_POST['date'], $_POST['image'], $_POST['content']);
            header("Location: admin.php");
        }
        
        $article = articles_get($link, $id);
        include("../views/article_admin.php");
    }else if($action=="delete"){
        $id = $_GET['id'];
        $article = articles_delete($link, $id);
        header("Location: admin.php");
    }else{
        $articles = articles_all($link, $_SESSION['user']);
        include("../views/articles_admin.php");
    }
?>