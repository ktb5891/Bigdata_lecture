<?
function hap($start, $end){
	$sum = 0;
	for($i = $start; $i <=$end; $i++){
		$sum = $sum + $i;
	}
	return $sum;
}
$result = hap($a, $b);
echo "<h2>$a ���� $b ������ ���� $result �̴�.";
?>