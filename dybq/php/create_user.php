<?php



session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $passowrd = $_POST['password'];
    $mail = $_POST['mail'];
    include("login_check.php");
    $sql="insert into AEON.USERS(AEON.USERS.name, AEON.USERS.password, AEON.USERS.mail) values ('$name','$passowrd','$mail')";
    change_query($sql);
    header("Location: create_user_page.php");
}





?>