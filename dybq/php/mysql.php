<?php
$server="68.183.234.39";//主机
$db_username="root";//你的数据库用户名
$db_password="daluosiNB";//你的数据库密码
$db_database="AEON";
$db_port=3306;

$con = mysqli_connect($server,$db_username,$db_password,$db_database,$db_port);

//链接数据库
function select_query($sql){
    global $con;
    return mysqli_query($con,$sql);

}
function change_query($sql){
    global $con;
    mysqli_query($con,$sql);
    mysqli_commit($con);

}
function create($user_name,$password,$mail,$super_user){
    $sql="insert into USERS(name, password, mail, authority) values ('$user_name','$password','$mail','$super_user')";
    change_query($sql);

}

function upload_profile($image_url,$content)
{
    $sql="insert into contents(title, content, image_path)  values ('1111','$content',$image_url)";
    change_query($sql);
}



function get_news($user_id){
    $sql="select id, title, text, time, user_id from news where user_id='$user_id'";
    $result=select_query($sql);
    $datas=mysqli_fetch_all($result);
    return $datas;
}

function get_items($user_id){
    $sql="select id, title, text, time, user_id from items where user_id='$user_id'";
    $result=select_query($sql);
    $datas=mysqli_fetch_all($result);
    return $datas;
}

function remove_news($news_id)
{
    $sql = "delete from AEON.news where AEON.news.id=$news_id";
    change_query($sql);
}
?>