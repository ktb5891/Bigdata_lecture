<?
$tot = $kor +$eng +$math;
$avg = $tot/3;
echo " 총점 : $tot <br>
평균 : $avg<br>";
switch ($avg){
	case ($avg >= 90):
	echo "<h2>학점 : A";
	break;
	
	case ($avg >= 80):
	echo "<h2>학점 : B";
	break;

	case ($avg >= 70):
	echo "<h2>학점 : C";
	break;

	case ($avg >= 60):
	echo "<h2>학점 : D";
	break;

	case ($avg < 60):
	echo "<h2>학점 : F";
	break;
}

?>