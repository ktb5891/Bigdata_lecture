<?
$sum2 = 0;
$sum5 = 0;
$sum10 = 0;
$result = 0;
$count2 = 0;
$count5 = 0;
$count10 = 0;
for($i = $sn; $i <=$en; $i++){
	if($i % 2 ==0){
	$sum2 = $sum2 + $i;
	$num2[$count2] = $i;
	$count2++;
	}
	if($i % 5 == 0){
	$sum5 = $sum5 + $i;
	$num5[$count5] = $i;
	$count5++;
	}
	if($i % 10 == 0){
	$sum10 = $sum10 +$i;
	$num10[$count10] = $i;
	$count10++;
	}
}
$count = 0;
while($count < 3){
	for($j = 0; $j <= $en; $j++){
		if($j % 10 == 0){
			echo "<br>";
		}
		if($count == 0){
		echo "$num2[$j] ";
		}
		if($count == 1){
		echo "$num5[$j] ";
		}
		if($count == 2){
		echo "$num10[$j] ";
		}
	}
	$count++;
}
$result = $sum2 + $sum5 - $sum10;
echo "<h3>$sn 부터 $en 까지의 <br>
2 의 배수의 합은 $sum2 이고<br>
5 의 배수의 합은 $sum5 이고<br>
10의 배수의 합은 $sum10 이고<br>
중복을 제외한 총 합은 $result 이다.";
?>