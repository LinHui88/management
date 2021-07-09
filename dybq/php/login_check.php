<?PHP
header("Content-Type: text/html; charset=utf8");


include('mysql.php');//链接数据库


function check($name,$password){
    $sql = "select * from USERS where name = '$name' and password='$password'";//检测数据库是否有对应的username和password的sql
    $result = select_query($sql);//执行sql
    $data = mysqli_fetch_all($result);//返回一个数值
    return $data[0];
}

?>