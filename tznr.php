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
div.fatie{
  position: fixed;
  right: 0;
  bottom: 0;
  width: 300px;
  border: 3px solid #73AD21;
}
div.biaoti{
  border: 5px solid green;
  border-radius: 5px;
}
a.yong{
  
  border: 5px solid red;
  border-radius: 5px;
  margin-top: 5px;
  margin-bottom: 5px;
  margin-right: 5px;
  margin-left: 0px;
}
a.xx{
  
  border: 5px solid blue;
  border-radius: 5px;
  margin-top: 5px;
  margin-bottom: 5px;
  margin-right: 0px;
  margin-left: 0px;
}
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
    /*$iii;
    $zx=0;
    $myfile = fopen("gly.txt", "r");
    while(!feof($myfile)) {
        $iii=fgets($myfile);
        $iii=chop($iii,'\n');
        if($_SESSION["xxs"]==$iii)
        {
            $zx=1;
        }
    }*/
    echo "论坛<br>";
    $jj;
    $ii;
    $qfile=fopen("tiezi/".$_GET["pid"]."/lou.txt","r");
    $jj=fgets($qfile);
    $jj=rtrim($jj,"\n");
    fclose($qfile);
    for($ii=1;$ii<=$jj;$ii++)
    {
        $biaoti = fopen("tiezi/".$_GET["pid"]."/low/".$ii.".txt", "r");
        $bti=fgets($biaoti);
        $yhyh=fgets($biaoti);
        $bti=rtrim($bti,"\n");
        $yhyh=rtrim($yhyh,"\n");

        fclose($biaoti);
        $yhu=fopen("yonghu/".$yhyh."/a.txt","r");
        $yongh=fgets($yhu);
        $yongh=rtrim($yongh,"\n");
        fclose($yhu);
        

        echo "<div class=biaoti>\n";
        echo "    <a class=yong href=\"tznr.php?pid=";
        echo $ii;
        echo "\">";
        echo $yongh;
        echo "</a>\n";
        echo $bti;
        echo "</div>\n<br>";
    }
    print <<<EOT
    <div class=fatie>
        <button onclick="document.location='index.php'">回到主页</button>
        <form action="ftft.php?pid=
EOT;
        echo $_GET["pid"];
    print <<<EOT
        " method="post">
        发帖:
        <br>
        内容:
        <br>
        <textarea name="nr" rows="10" cols="30">
        </textarea>
        <br>
        <input type="submit">
        </form>
    </div>
EOT;
}






?>


    

</body>

</html>

