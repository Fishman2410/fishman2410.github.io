<?php
session_start();
$link=mysqli_connect("localhost", "Admin", "SuperSecretPassword", "Blog");


$login = $_REQUEST['uname'];
$pass = $_REQUEST['psw'];

    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$login)."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    if($data['user_password'] == ($pass))
    {
        $_SESSION['user'] = $login;
        header("Location: index.php");
        
    }
    else
    {
        print "Incorrect login or password";
    }
?>