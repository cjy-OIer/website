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
    $fl1=fopen("tz.txt","r");
    $xxq1=fgets($fl1);
    $xx1=rtrim($xxq1,"\n");
    $xxq1++;
    fclose($fl1);
    $fl1=fopen("tz.txt","w");
    fwrite($fl1,$xxq1);
    fclose($fl1);
    mkdir("tiezi/".$xxq1."/low/",0777,true);
    $fl2=fopen("tiezi/".$xxq1."/lou.txt","w");
    fwrite($fl2,"1");
    fclose($fl2);
    $fl3=fopen("tiezi/".$xxq1."/1.txt","w");
    fwrite($fl3,$_POST["bt"]."\n".$_SESSION["xxs"]);
    fclose($fl3);
    $fl4=fopen("tiezi/".$xxq1."/low/1.txt","w");
    fwrite($fl4,$_POST["nr"]);
    fclose($fl4);
    echo "成功发帖!";
}


?>

<button onclick="document.location='luntan.php'">回到论坛</button>

</body>

</html>







