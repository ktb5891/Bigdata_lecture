<?
function hap($start, $end){
	$sum = 0;
	for($i = $start; $i <=$end; $i++){
		$sum = $sum + $i;
	}
	return $sum;
}
$result = hap($a, $b);
echo "<h2>$a 에서 $b 까지의 합은 $result 이다.";
?>