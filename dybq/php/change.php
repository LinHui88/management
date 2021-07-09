<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION["userinfo"]['user_id'];//post获得用户名表单值
    $title = $_POST['title'];//post获得用户密码单值
    $text=$_POST['text'];
    include("mysql.php");
    $sql="insert into news(title, text, time, user_id) values ('$title','$text',timestamp(now()),$user_id)";
    change_query($sql);

    header("Location: news_management.php");


}






?>