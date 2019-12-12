<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Blog</title>
        <link rel="stylesheet" href="./style.css">
        <script src="./scripts/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="./scripts/script.js"></script>
    </head>
    <body>   

        
        <div class="header">
            <div class="topnav">
              <a href="index.php">Home</a>
            </div>

        </div>

            <div class="login">
                <?php
                if($_SESSION['user']=="admin@gmail.com" && !empty($_SESSION['user'])){
                    ?>
                    <a href="Logout.php"><input type="submit" value="Log out"></a>
                    <a href="admin/admin.php"><input type="submit" value="Articles"></a>

                    
                    <?php
                }else if(empty($_SESSION['user'])){
                    ?>
                <input type="submit" value="Register" onclick="document.getElementById('id02').style.display='block'">       
                
                <div id="id02" class="modal">
                          <span onclick="document.getElementById('id02').style.display='none'" 
                        class="close" title="Close Modal">&times;</span>

                          <form class="modal-content animate" action="./Register.php">

                              <div class="container">
                                <h1>Register</h1>
                                <p>Please fill in this form to create an account.</p>
                                <hr>

                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>

                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="confirm_password" required>
                                <hr>

                                <button type="submit" class="registerbtn">Register</button>
                                  
                                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                              </div>

                              <div class="container signin">
                                <p>Already have an account? <a onclick="document.getElementById('id01').style.display='block'" href="#">Sign in.</a></p>
                              </div>
                          </form>
                </div>
                
                <input type="submit" value="Login" onclick="document.getElementById('id01').style.display='block'">


                        <div id="id01" class="modal">
                          <span onclick="document.getElementById('id01').style.display='none'" 
                        class="close" title="Close Modal">&times;</span>

                          <form class="modal-content animate" action="./Login.php">

                            <div class="container">
                              <label for="uname"><b>Email</b></label>
                              <input type="text" placeholder="Enter Username" name="uname" required>

                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>

                              <button type="submit">Login</button>
                              <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                              </label>
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                              <span class="psw">Forgot password?</span>
                            </div>

                            <div class="container" style="background-color:#f1f1f1;"></div>
                          </form>
                        </div>
                <?php
                }else{
                    ?>
                    <a href="Logout.php"><input type="submit" value="Log out"></a>
                    <a href="admin/admin.php"><input type="submit" value="Articles"></a>
                    <?php
                }
                ?>
                        
            </div>
        
        

        <div class="cont">

            <div class="row">
                <div class="leftcolumn">
                    <?php foreach($articles as $a): ?>
                    <div class="card">
                        <h2><a href="./Atricle.php?id=<?=$a['id']?>"><?=$a['title']?></a></h2>

                        <h5><a class="toggle">Posted by <?=$a['author']?>, on <?=$a['date']?></a></h5>

                        <div class="fakeimg" style=""><img src="<?=$a['image']?>" style="width: 100%;" /></div>
                        <p><?=articles_intro($a['content'])?>...</p>

                    </div> 
                    <?php endforeach ?>
                </div>
                <div class="rightcolumn">
                    <div class="card">
                        <h2>About Blog</h2>
                        <div class="fakeimg" style="height:100px;"><img src="./materials/blogging-research-wordle.jpg" style="width: 100%;" /></div>
                        <p></p>
                    </div>
                    <div class="card">
                        <h3>Popular Post</h3>
                        <div class="fakeimg">Image</div><br>
                        <div class="fakeimg">Image</div><br>
                        <div class="fakeimg">Image</div>
                    </div>
                    <div class="card">
                        <h3>Follow On</h3>
                        <p>Some text..</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="footer">
            <h2>Footer</h2>
        </div> 
    </body>
</html>