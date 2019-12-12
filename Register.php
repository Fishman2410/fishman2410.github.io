<?
$link=mysqli_connect("localhost", "Admin", "SuperSecretPassword", "Blog");

    $err = array();
    $login = $_REQUEST['email'];
    $password = (trim($_REQUEST['psw']));
    $confirm_password = (trim($_REQUEST['confirm_password']));

    if(!(filter_var($login, FILTER_VALIDATE_EMAIL)))
    {
        $err[] = "$login is not a valid email address";
    }
        
    if(!($password == $confirm_password)){
        $err[] = "Passwords don't match!";
    }

    if(strlen($login) < 3 or strlen($login) > 30)
    {
        $err[] = "Too short email!";
    }

    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $login)."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Already exists!";
    }

    if(count($err) == 0)
    {

        

        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        header("Location: index.php");
    }
    else
    {
        print "<b>Erorrs:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
?>