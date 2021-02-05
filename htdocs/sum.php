<?
$sum2 = 0;
$sum5 = 0;
$sum10 = 0;
$result = 0;
for($i = $sn; $i <=$en; $i++){
	if($i % 2 ==0){
	$sum2 = $sum2 + $i;
	}
	if($i % 5 == 0){
	$sum5 = $sum5 + $i;
	}
	if($i % 10 == 0){
	$sum10 = $sum10 +$i;
	}
}
$result = $sum2 + $sum5 - $sum10;
echo "<h3>$sn 부터 $en 까지의 <br>
2 의 배수의 합은 $sum2 이고<br>
5 의 배수의 합은 $sum5 이고<br>
총 합은 $result 이다.";
?>