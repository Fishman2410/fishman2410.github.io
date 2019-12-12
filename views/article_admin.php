<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Blog</title>
        <link rel="stylesheet" href="../style.css">
        <script src="./scripts/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="./scripts/script.js"></script>
    </head>
    <body>   
        <div class="header">
            <div class="topnav">
              <a href="../index.php">Home</a>
            </div>

        </div>
        
        <div class="cont">

            <div class="row">
                <div class="leftcolumn">
                    
                    <div class="card">
                           <div class="container">
                              <form method="POST" action="../admin/admin.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                                <div class="row">
                                  <div class="col-25">
                                    <label for="title">Title</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" id="title" name="title" value="<?=$article['title']?>" placeholder="Your title..">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-25">
                                    <label for="date">Date</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="date" id="date" name="date" value="<?=$article['date']?>" placeholder="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-25">
                                    <label for="image">Image</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" id="image" name="image" value="<?=$article['image']?>" placeholder=" Write path to your image">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-25">
                                    <label for="content">Content</label>
                                  </div>
                                  <div class="col-75">
                                    <textarea id="content" name="content" placeholder="Write your article.." style="height:200px"><?=$article['content']?></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <input type="submit" value="Submit">
                                </div>
                              </form>
                            </div>

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