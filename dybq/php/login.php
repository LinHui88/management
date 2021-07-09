<head>
    <link rel="stylesheet" type="text/css" href="../static/aaa.css">
</head>
<body>



<div id="form">
    <div id="error">
        <?php

        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];//post获得用户名表单值
            $passowrd = $_POST['password'];//post获得用户密码单值
            include("login_check.php");
            $result=check($name, $passowrd);
            if (!$result) {
                echo "error";
            } else
            {


                //验证用户名和密码成功后
                $_SESSION['userinfo'] = [
                    'user_id' => $result[0],
                    'username' => $result[1]
                ];
                header("Location: index.php");
            }

        }


        ?>

    </div>
    <form action="login.php" method="post">
        <label>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit">


    </form>
</div>

<?php
?>
</body>