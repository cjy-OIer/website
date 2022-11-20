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
}
else
{
    $fl1=fopen("tiezi/".$_GET["pid"]."/lou.txt","r");
    $xxq1=fgets($fl1);
    $xxq1=rtrim($xxq1);
    $xxq1++;
    fclose($fl1);
    $fl2=fopen("tiezi/".$_GET["pid"]."/lou.txt","w");
    fwrite($fl2,$xxq1);
    fclose($fl2);
    $fl3=fopen("tiezi/".$_GET["pid"]."/low/".$xxq1.".txt","w");
    fwrite($fl3,$_POST["nr"]."\n".$_SESSION["xxs"]);
    fclose($fl3);
    echo "成功回复!";
}


?>

<button onclick="document.location='luntan.php'">回到论坛</button>

</body>

</html>