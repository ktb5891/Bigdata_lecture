<?
$tot = $kor + $eng + $math +$soc + $sci;
$avg = $tot/5;

if($avg >= 90){
	$grade = 'A';
}
elseif ($avg >= 80){
	$grade = 'B';
}
elseif($avg >= 70){
	$grade = 'C';
}
elseif($avg >= 60){
	$grade = 'D';
}
else{
	$grade = 'F';
}

$connect = mysql_connect("localhost","kimhj","1234");
mysql_select_db("kimhj_db",$connect);
$sql = "insert into sungjuk values ('$name', $kor, $eng, $math, $soc, $sci, $tot, $avg, '$grade');";

$result = mysql_query($sql);

if($result){
	echo "레코드 삽입 완료!";
}
else{
	echo "레코드 삽입 실패! 에러 확인 요망!";
}

mysql_close($connect);
?>