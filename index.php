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
<title>ddf</title>
<?php
//<link rel="shortcut icon" type="image/x-icon" href="/images/hhhh.jpeg"/>
?>
</style>
<link rel="stylesheet" href="orz4.css">
</head>

<body>
<div.header>
    
</div>
<?php

if($_SESSION["xxs"]==NULL)
{
    echo "未登录!";
}
else
{
    echo "登录者:";
    $yonghu=fopen("yonghu/".$_SESSION["xxs"]."/a.txt","r");
    $yhm=fgets($yonghu);
    //$yhm=chop($yhm,"\n");
    echo $yhm;
    fclose($yonghu);
}




?>
<h1 style="color:black;">首页<br></h1>
<h1 style="color:red;">全站更新,可能会出一点状况<br></h1>
<?php
$iii;
$myfile = fopen("gly.txt", "r");
while(!feof($myfile)) {
    $iii=fgets($myfile);
    $iii=chop($iii,'\n');
    if($_SESSION["xxs"]==$iii)
    {
        echo "您好，管理员";
    }
}
?>
<br>
<p style="color:red;">这是xxx的网站<br></p>
<div class=cew>
    <a class=wfr href="gonggao.php">公告</a>
    <a class=wfr href="https://cjy114514.github.io/blog/">my blog</a>
    <a href="luntan.php">论坛</a>
    <a href="denlu.php">登录</a>
</div>
<button onclick="document.location='luntan.php'">论坛</button>
<button onclick="document.location='denlu.php'">登录</button>
<button onclick="document.location='gonggao.php'">公告</button>
<br>
<?php
/*$y=date("Y");
$m=date("m");
$d=date("d");
$h=date("H");
$h=$h+12;
if($h>=24)
{
  $d=$d+1;
  $h=$h-24;
}
$d=$d-1+1;
if(($m==1||$m==3||$m==5||$m==7||$m==8||$m==10||$m==12)&&$d==32)
{
  $d=1;
  $m+=1;
}
if(($m==4||$m==6||$m==9||$m==11)&&$d==31)
{
  $d=1;
  $m+=1;
}
if($m==2&&$d==29&&$y%4!=0){
  $d=1;
  $m+=1;
}
if($m==2&&$d==30&&$y%4==0&&$y%100!=0){
  $d=1;
  $m+=1;
}
if($m==2&&$d==30&&$y%400==0){
  $d=1;
  $m+=1;
}
if($m==13)
{
  $m=1;
  $y+=1;
}
echo $y;
echo ".";
echo $m;
echo ".";
if($d<10)
{
  echo "0";
  echo $d;
}
else
{
  echo $d;
}
echo ":";
if($h<10)
{
  echo "0";
  echo $h;
}
else
{
  echo $h;
}
echo ":";
echo date("i");
*/
?>
<br>
<img src="kdl.jpeg" alt="珂朵莉">
<p style="color:orange;">不要点</p>
<br>
<button onclick="document.location='zhuce.php'">注册</button>

</body>

</html>

