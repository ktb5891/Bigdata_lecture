<?
$num = array(15, 13, 9, 7, 6, 100, 50, 22, 90, 52);

$count = 10;

echo "���� �� : ";
for($a = 0; $a<10; $a++){
	echo $num[$a]."  ";
}
echo "<br>";

for($i = $count-2; $i>=0;$i--){
	for($j = 0; $j<=$i; $j++){
		if($num[$j] > $num[$j +1]){
			$tmp = $num[$j];
			$num[$j] = $num[$j+1];
			$num[$j+1] = $tmp;
		}
	}
}

echo "�������� ����(���� ����) : ";
for ($a = 0; $a<10; $a++){
	echo $num[$a]."  ";
}
?>