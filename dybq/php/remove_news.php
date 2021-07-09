<?php


include("mysql.php");



$id=$_GET['id'];;
remove_news($id);
header("Location: news_management.php");



?>