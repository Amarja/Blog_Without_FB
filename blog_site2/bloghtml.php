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
        <div class = "header_section clearfix">
            <a href="index.php" class="logo-link"><img src="images/blog-icon.png" class = "logoimg"></a>
            <h1>Welcome to Blog Site</h1>
            <?php
            if((isset($_SESSION['sess_user_id'])) || (isset($_SESSION['rsess_user_id']))){
                    echo '<div class="link-wrap pull-right clearfix">';
                    echo "<a href = 'logout.php' class='pull-right'>Logout</a>";
                    echo '</div>';
            }
            else{
                echo '<div class="link-wrap pull-right clearfix">';
                echo '<a href = "registerhtml.php" class="pull-right">Register</a>';
                echo '<a href = "loginhtml.php" class="pull-right">Login</a>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="clearfix">
                    <a href="session_handle.php" class="maroon-btn">Do you want to enter your blog ?</a>
        </div>
        <div class="post-wrapper clearfix">
            <?php
                require "config.php";
                $data = $conn->query('SELECT * FROM blog ORDER BY blog_date DESC');
                foreach($data as $row) {
                    echo "<div class='post'>";
                    echo "<div class='blog_details clearfix'>";
                    echo "<h2 class='blog_title'>".$row['btitle']."</h2>";
                    echo "<h5 class='user_name'>Posted By- ".$row['u_disp_name']."</h5>";
                    echo "<h5 class='post_date'>".$row['blog_date']."</h5>";
                    echo "</div>";
                    echo "<div class='blog_text'>";
                    echo "<p>".$row['btext']."</p>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>