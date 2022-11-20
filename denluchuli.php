<?php
session_start();
?>
<!DOCTYPE html>

<html>
<meta charset="UTF-8">
<style>
body {background-color: powderblue;}
</style>
<body>



<?php

$myfile = fopen("yonghu.txt", "r");
$ij = 0;
$uid;
$mima;
$nam;
while(!feof($myfile))
{
    $uid=fgets($myfile);
    $nam=fgets($myfile);
    $mima=fgets($myfile);
    $uid=chop($uid,"\n");
    $nam=chop($nam,"\n");
    $mima=chop($mima,"\n");
    if($nam==$_POST["xname"]&&$mima==$_POST["xmima"])
    {
        $ij=1;
    }
}
if($ij==1)
{
    echo $_POST["xname"];
    echo ",登录成功";
    $_SESSION["xxs"] = $uid;
}
else
{
    echo "登录失败!";
}
fclose($myfile);

?>
<button onclick="document.location='index.php'">回到主页</button>

</body>

</html>

