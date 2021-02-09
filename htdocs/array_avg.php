<?
$score[0] = $kor;
$score[1] = $math;
$score[2] = $eng;
$score[3] = $sci;

echo "<h2>과목 점수 : ";
for($c = 0; $c <4; $c++){
	if($c != 3){
	echo "$score[$c], ";
	}
	else{
	echo"$score[$c]";
	}
}
echo "<br>";
$tot = $score[0] + $score[1] +$score[2] +$score[3];
$avg = $tot/4;
echo "평균 : $avg ";
?>