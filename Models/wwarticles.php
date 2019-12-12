<?php
    function articles($link){
        $query = "SELECT * FROM articles ORDER BY date DESC";
        
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die("Sorry, can't connect to the mysql."); 
        }
        
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

    function articles_all($link, $login){
        if($login=="admin@gmail.com"){
            $query = "SELECT * FROM articles ORDER BY date DESC";
        }else{
            $query = "SELECT * FROM articles WHERE author='$login' ORDER BY date DESC";
        }

        
        
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die("Sorry, can't connect to the mysql."); 
        }
        
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

    function articles_get($link, $id){
        $query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id);
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die("Sorry, can't connect to the mysql."); 
        }
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }

    function articles_new($link, $title, $date, $author,  $image, $content){
        
        if($title=='')
            return false;
        
        $q = "INSERT INTO `articles` (title, date, author, image, content) VALUES ('%s', '%s', '%s', '%s', '%s')";
        
        $query = sprintf($q, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $author),
                         mysqli_real_escape_string($link, $image),
                         mysqli_real_escape_string($link, $content));
        
        $query = "INSERT INTO articles (title, date, author, image, content) VALUES ('$title', '$date', '$author', '$image', '$content')";
        
        $result = mysqli_query($link, $query);
        
        
        if(!$result)
            die(mysqli_error($link));
        
        return true;
    }

    function articles_edit($link, $id, $title, $author, $date, $image, $content){
        $title=trim($title);
        $author=trim($author);
        $date=trim($date);
        $content=trim($content);
        $image=trim($image);
        
        $id=(int)$id;
        
        if($title=='')
            return false;
        
        $q = "UPDATE articles SET title='%s', date='%s', image='%s', content='%s' WHERE id = '%d'";
        
        $query = sprintf($q, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $image),
                         mysqli_real_escape_string($link, $content), $id);
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_delete($link, $id){
        $id = (int)$id;
        if($id == 0)
            return false;
            
        $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
            
        return mysqli_affected_rows($link);
    }

    function articles_intro($text, $len = 100){
        return mb_substr($text, 0 ,$len);
    }
?>