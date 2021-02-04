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

echo "국어 : $kor <br>
영어 : $eng <br>
수학 : $math <br>
총점 : $tot <br>
평균 : $avg <br>
<h2> 학점 : $grade";