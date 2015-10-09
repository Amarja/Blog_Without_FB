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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="blog_wrapper container">
        <div class = "header_section clearfix">
            <a href="index.html" class="logo-link"><img src="images/blog-icon.png" class = "logoimg"></a>
            <h1>Login</h1>
        </div>
        <div class="login middle-box-wrapper clearfix">
            <div class="col-sm-12">
                <form action="login.php" method = "post" role="form" name="login_form" onsubmit="return validateLoginForm()">
                    <label>Email Id:</label>
                    <input type= "text" name="email" class="form-control textfield" placeholder="Email Id"  required autofocus><span class="required">*</span><br>
                    <label>Password:</label>
                    <input type= "password" name="pass" class="form-control textfield" placeholder="Password" required><span class="required">*</span><br>
                    <?php
                        $errmsg = isset($_GET['err']) ? (int)$_GET['err'] : 0;
                        if($errmsg == 1){
                                   echo "<label class='errmsg'>Please enter email address and password.</label>";
                        }
                        else if($errmsg == 2){
                           echo "<label class='errmsg'>Please register to continue.</label>";
                        }
                    ?>
                    <p id="error_msg"  class='errmsg'></p>
                    <input type= "submit" value="Login">
                </form>
                <a href="registerhtml.php">Create account</a>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>