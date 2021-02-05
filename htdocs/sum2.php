<?
$sum = 0;
for($i = $sn; $i <=$en; $i++){
	if($i % 2 ==0){
	$sum = $sum + $i;
	}
}
echo "<h3>$sn 부터 $en 까지의 짝수의 합은 <br>
$sum 이다.";
?>