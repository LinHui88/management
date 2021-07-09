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
    <div id="news_table">
        <table>
            <tr>
                <td>
                    タイトル
                </td>
                <td>
                    タイム
                </td>
                <td>
                    テキスト
                </td>
                <td>
                    详细
                </td>
            </tr>

            <?php

                $datas=get_items($_SESSION['userinfo']['user_id']);

                foreach ($datas as $data){

                    echo "<tr>";
                    $i=0;
                    $news_id=$data[0];
                    $title=$data[1];
                    foreach (array_slice($data,1,-1) as $col){

                        echo "<td>$col</td>>";
                    }
                    echo "<td><a href=''> $title</a></td>";
                    echo "<td> <a href='remove_items.php?id=$news_id'>remove</a> </td>";
                    echo "</tr>";


                }







            ?>

        </table>
        <div class="add">
            <form action="add_items.php">
                <input type="submit" value="追加" />
            </form>

        </div>
    </div>


</body>



