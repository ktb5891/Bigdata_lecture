<?
$connect = mysql_connect("localhost","kimhj","1234");
mysql_select_db("kimhj_db",$connect);
$sql = "insert into biz_card (num, name, company, tel, hp, address) values ($num, '$name', '$company', '$tel', '$hp', '$address');";

$result = mysql_query($sql);

if($result){
	echo "레코드 삽입 완료!";
}
else{
	echo "레코드 삽입 실패! 에러 확인 요망!";
}
mysql_close($connect);
?>