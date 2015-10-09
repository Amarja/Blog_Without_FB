<?php
session_start();
    require "config.php";
    $fname = $lname = $email = $pass = $emailerr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $_SESSION['rsess_user'] = $fname;

        if(empty($_POST['fname'])){
            header('Location:registerhtml.php?err=1');
        }
        else if(empty($_POST['lname'])){
                header('Location:registerhtml.php?err=2');
        }
         else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              header('Location:registerhtml.php?err=3');
         }
         else if(empty($_POST['pass'])){
               header('Location:registerhtml.php?err=4');
         }
        else{
            $sql = "INSERT INTO user(fname,lname,email,pass) VALUES (:fname,:lname,:email,:pass)";
            $ins = $conn->prepare($sql);
            $ins->bindParam(':fname', $_POST['fname'], PDO::PARAM_STR);
            $ins->bindParam(':lname', $_POST['lname'], PDO::PARAM_STR);
            $ins->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $ins->bindParam(':pass', $_POST['pass'], PDO::PARAM_STR);
            $ins->execute();
            $_SESSION['sess_user'] = $row['fname'];
            $_SESSION['rsess_user_id'] = 1;
            header('location:blog_entry.php');
        }
    }
?>