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

<div class="new_user">
    <form action="create_user.php" method="post">
        <label for="mail">mail address：</label>
        <input name="mail" type="text" id="mail">
        <label for="name">User:id：</label>
        <input name="name" type="text" id="name">
        <label for="password">Password：</label>
        <input name="password" type="text" id="password">
        <input type="submit">
    </form>
</div>

</body>



