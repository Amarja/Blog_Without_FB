<?php
//    $database ="db586137118";
//    $host = "db586137118.db.1and1.com";
//    $username ="dbo586137118";
//    $password = "testBlog@123";
    $database ="blog_site";
    $host = "localhost";
    $username ="root";
    $password = "";

    $conn = new PDO("mysql:dbname={$database};host={$host};port={3306}", $username, $password);

    if(!$conn){
        echo"Could not to the datbase";
    }
    $sql = "create table user(uid INT auto_increment primary key,fname varchar(100),lname varchar(100),email varchar(100),pass varchar(100))";
    $conn->exec($sql);
    $blogsql = "create table blog(bid INT auto_increment primary key,btitle varchar(100),btext text,blog_date datetime,u_disp_name VARCHAR(50))";
    $conn->exec($blogsql);
?>