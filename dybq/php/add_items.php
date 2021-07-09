<head>
    <?php
    session_start();
    include ('mysql.php');
    if(!($_SESSION['userinfo']))
        header("Location: login.php");

    ?>
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
                <li> <a href="items_management.php">企業商品管理</a> </li>
                <li><a href="create_user_page.php">新規ユーザ管理</a></li>
            </ul>
        </li>
    </ul>
    <div class="clear"></div>
</div>
<div>
    <form action="change.php" method="post" enctype="multipart/form-data">
        <label for="file">文件名：</label>
        <input type="file" name="file" id="file"><br>
        <label for="title">标题：</label>
        <input type="text" name="title"><br>
        <label for="title">文本：</label>
        <input type="text" name="text" style="width: 300px;height: 200px"><br>
        <input type="submit" name="submit" value="提交">
    </form>




</div>


</body>