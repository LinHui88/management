
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <?php
    session_start();
    if(!$_SESSION['userinfo'] )
        header("Location: login.php");

    ?>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../static/style.css">
</head>
<body>
<div class="logo">
    <p>大会ロゴ</p>
</div>
<div class="lout">
    <form action="logout.php">
        <input type="submit" value="lot out" />
    </form>

</div>
<div class="demo-nav">
    <ul class="menu fllil">
        <li>⬇️
            <ul class="sub-menu">
                <li> <a href="news_management.php">ニュース管理</a> </li>
                <li>CM管理</li>
                <li>企業商品管理</li>
                <li><a href="create_user_page.php">新規ユーザ管理</a></li>
            </ul>
        </li>
    </ul>
    <div class="clear"></div>
</div>
<div class="main">
    <h1>ようこそ</h1>
    <?php

    echo $_SESSION['userinfo']['username']."さん";

    ?>

</div>
</body>
</html>

