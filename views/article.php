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
        
        <div class="cont">

            <div class="row">
                <div class="leftcolumn">
                    
                    <div class="card">
                        <h2><?=$article['title']?></h2>

                        <h5>Posted by <?=$article['author']?>, on  <?=$article['date']?></h5>

                        <div class="fakeimg" style=""><img src="<?=$article['image']?>" style="width: 100%;" /></div>
                            
                        <p><?=$article['content']?></p>

                    </div>                  
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