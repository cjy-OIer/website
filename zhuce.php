<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
<meta charset="UTF-8">
<head>
<style>
body {background-color: powderblue;}
</style>
</head>

<body>

<?php
if($_SESSION["xxs"]==NULL)
{
    echo "未登录!";
    print <<<EOT
    <br>
    <button onclick="document.location='index.php'">回到主页</button>
EOT;
}
else
{
    print <<<EOT
    <button onclick="document.location='index.php'">回到主页</button>
EOT;
}
/*
    <form action="zhucechuli.php" method="post">
    用户名: <input type="text" name="xname"><br>
    密码: <input type="text" name="xmima"><br>
    电子邮件: <input type="text" name="xemail"><br>
    <input type="submit">
    </form>
*/
?>




</body>

</html>

