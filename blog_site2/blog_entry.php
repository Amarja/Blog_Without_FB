<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Site</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/script.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="blog_wrapper container">
        <div class="blog middle-box-wrapper clearfix">
            <img src="images/blogback.png">
            <a href="logout.php" class="blog_logout">Logout</a>
            <a href="bloghtml.php" class="blog_logout back_to_blogs">Back to the Posts</a>
            <div class="col-sm-6 post_blog ">
            <form action="blog.php" method="post" name="blog_form" onsubmit="return validateBlogForm()">
                <input type= "text" name="user_disp_name" class="form-control textfield" value="<?php
                if(isset($_SESSION['sess_user'])){
                    echo $_SESSION['sess_user'];
                }
                else if(isset($_SESSION['rsess_user'])){
                    echo $_SESSION['rsess_user'];
                }
                ?>" >
                <br>
                <input type= "text" name="blog_title" class="form-control textfield" placeholder="Blog Title" ><br>
                <textarea rows="6" cols="78" name="blog_text" class="form-control textfield" placeholder="Enter your text here..." ></textarea><br>
                <input type="submit" value="Post" class="pull-left">
                <?php
                    $error = isset($_GET['fillerr']);
                    if ( $error  == 1) {
                      echo "<label class='errmsg'>All fields are compulsory.</label>";
                    }
                ?>
                <p id="fillup_msg" class='errmsg'></p>
            </form>
        </div>
        <img src="images/plane.png" class="plane-img">
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>