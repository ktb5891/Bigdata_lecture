<?
$tot = $kor + $eng + $math;
$avg = $tot/3;

if($avg >= 90){
    $grade = "A";
}
elseif ($avg >= 80){
    $grade = "B";
}
elseif($avg >= 70){
    $grade = "C";
}
elseif($avg >= 60){
    $grade = "D";
}
else{
    $grade = 'F';
}

echo "���� : $kor <br>
���� : $eng <br>
���� : $math <br>
���� : $tot <br>
��� : $avg <br>
<h2> ���� : $grade";