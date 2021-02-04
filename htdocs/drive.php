<?
$test1_cut = 70; $test2_cut = 80; $test3_cut = 90;
echo "<h3>운전면허 시험 합격 기준은 <br>
<h4>필기 점수 $test1_cut 점 이상<br>
<h4>실기 점수 $test2_cut 점 이상<br>
<h4>도로주행 점수 $test3_cut 점 이상입니다.<br>
<h4>획득한 필기 점수 : $test1 점, $test2 점, $test3 점<br><br>";

if( ($test1 >= $test1_cut) && ($test2 >= $test2_cut) && ($test3 >= $test3_cut) ){
echo "합격하셨습니다! 축하합니다!";
}
else {
echo "죄송합니다. 불합격입니다.";
}

?>