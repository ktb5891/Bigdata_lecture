<?
$connect = mysql_connect("localhost","kimhj","1234");
mysql_select_db("kimhj_db",$connect);
$name = "select name from sungjuk order by average asc limit 1;";
$avg = "select average from sungjuk order by average asc limit 1;";
$grade = "select grade from sungjuk order by average asc limit 1;";

$name_query = mysql_query($name);
$avg_query = mysql_query($avg);
$grade_query = mysql_query($grade);

$name_result = mysql_result($name_query,0);
$avg_result = mysql_result($avg_query,0);

$grade_result = mysql_result($grade_query,0);

echo "�̸� : $name_result<br>
��� : $avg_result<br>
���� : $grade_result<br>";
mysql_close($connect);
?>