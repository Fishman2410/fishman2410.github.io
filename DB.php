<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'Admin');
define('MYSQL_PASSWORD', 'SuperSecretPassword');
define('MYSQL_DB', 'Blog');

function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB)
        or die("Error: ".mysql_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    
    return $link;
}
?>