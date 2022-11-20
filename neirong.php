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
    $myfile = fopen("gonggao.txt", "r") or die("Unable to open file!");
    echo $_POST["tiezi"];
    


    
    while(!feof($myfile)) {
        echo "(";
        $wwe=fgets($myfile);
        $wwe=chop($wwe,'\n');
        echo "(";
        echo $wwe;
        echo ")<br>";
        echo "--------------------------------------------------------------------------------<br>";




        



        echo fgets($myfile) . "<br>";
        

    }
    echo "--------------------------------------------------------------------------------<br>";
    fclose($myfile);
    print <<<EOT
    <button onclick="document.location='index.php'">回到主页</button>
    <button onclick="document.location='gly.php'">应聘管理员</button>
EOT;
}


?>


</body>
</html>