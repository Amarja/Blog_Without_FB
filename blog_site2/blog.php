<?php
ob_start();
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
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="display_post">
<?php
require "config.php";
$blog_title = $blog_text = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = (string)$_GET['userid'];
$blog_title = $_POST['blog_title'];
$blog_text = $_POST['blog_text'];
$u_disp_name = $_POST['user_disp_name'];
date_default_timezone_set('Asia/Kolkata');
if((empty($u_disp_name))||(empty($blog_title))||(empty($blog_text))){
header("Location: blog_entry.php?fillerr=1");
}
else{
$stmt = "INSERT into blog(btitle,btext,blog_date,u_disp_name) VALUES (:btitle,:btext,now(),:u_disp_name)";
$res = $conn->prepare($stmt);
$res->execute(array(':btitle' => $blog_title,':btext' => $blog_text,':u_disp_name' => $u_disp_name));
header("Location:bloghtml.php");
}
}
?>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>