<?
$con = mysql_connect("localhost","kimhj","1234");
mysql_select_db("kimhj_db",$con);

$tel = "$phone1+$phone2+$phone3";
if($movie=="yes")
   $hobby='movie';
if($book=="yes")
   $hobby="$hobby,book";
if($shop=="yes")
   $hobby='$hobby,shop';
if($sport=="yes")
   $hobby="$hobby,sport";

$sql="insert into membership (id,name,passwd,sex,tel,address,hobby,intro,title) 
values ('$id','$name', '$passwd', '$gender','$tel','$address','$hobby','$intro','$title')";

$result=mysql_query($sql);
mysql_close($con);
?>