<?
$connect = mysql_connect("localhost","kimhj","1234");
mysql_select_db("kimhj_db",$connect);
$sql = "insert into biz_card (num, name, company, tel, hp, address) values ($num, '$name', '$company', '$tel', '$hp', '$address');";

$result = mysql_query($sql);

if($result){
	echo "���ڵ� ���� �Ϸ�!";
}
else{
	echo "���ڵ� ���� ����! ���� Ȯ�� ���!";
}
mysql_close($connect);
?>