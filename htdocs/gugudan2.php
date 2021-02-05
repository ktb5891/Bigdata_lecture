<?
echo"<h2>$sn 단 부터 $en 단 까지 출력<br>";

for($i = $sn; $i <= $en; $i++){
	for($j = 1; $j <10; $j++){
		$result = $i*$j;
		echo"<h3>$i X $j = $result<br>";
	}
	echo"------------------------------<br>";
}
?>