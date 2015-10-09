<?php
session_start();
    require "config.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = 'SELECT fname,email,pass FROM user WHERE email=:email AND pass=:pass';
        $result = $conn->prepare($sql);
        $result->execute(array(':email' => $email, ':pass' => $pass));

        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['sess_user'] = $row['fname'];

        if(($email == "") || ($pass == "")){
            header('location:loginhtml.php?err=1');
        }
        else if($result->rowCount() == 0){
            header('location:loginhtml.php?err=2');
        }
        else{
                $_SESSION['sess_user_id'] = 1;
             header('location:blog_entry.php');
        }
    }
?>