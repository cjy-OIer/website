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
    <h1>管理员招聘:<br></h1>
    <p>以下几点满足1点即可:<br></p>
    <p>1.会HTML/css/php<br></p>
    <br>
    <p>有意者论坛发帖<br></p>
    <button onclick="document.location='index.php'">回到主页</button>
EOT;
}
?>







</body>

</html>