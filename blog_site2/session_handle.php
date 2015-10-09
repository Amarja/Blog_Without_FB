<?php
session_start();
    if((isset($_SESSION['sess_user_id']))|| (isset($_SESSION['rsess_user_id']))){
        header("Location: blog_entry.php");
    }
    else{
        header("Location: loginhtml.php");
    }
?>