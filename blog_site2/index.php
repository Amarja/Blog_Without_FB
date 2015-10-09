<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blogs</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <script src="js/script.js"></script>
        <![endif]-->
  </head>

<body>
    <div class="blog_wrapper">
        <?php
              if((isset($_SESSION['sess_user_id'])) || (isset($_SESSION['rsess_user_id']))){
                  unset($_SESSION['sess_user_id']);
                  unset($_SESSION['rsess_user_id']);
                  session_destroy();
              }
        ?>
        <div class="blog-link-wrap">
            <a href="bloghtml.php" class="blog_link">Enter the blog</a>
        </div>
        <video class="videodiv" controls preload="true" autoplay loop muted style="height:531px;">
                <source src="▶%20After%20Effects%20particle%20sparks.mp4" type="video/mp4">
         </video>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>