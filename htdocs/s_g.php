<?
$tot = $kor +$eng +$math;
$avg = $tot/3;
echo " ���� : $tot <br>
��� : $avg<br>";
switch ($avg){
	case ($avg >= 90):
	echo "<h2>���� : A";
	break;
	
	case ($avg >= 80):
	echo "<h2>���� : B";
	break;

	case ($avg >= 70):
	echo "<h2>���� : C";
	break;

	case ($avg >= 60):
	echo "<h2>���� : D";
	break;

	case ($avg < 60):
	echo "<h2>���� : F";
	break;
}

?>