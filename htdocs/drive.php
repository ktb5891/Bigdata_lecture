<?
$test1_cut = 70; $test2_cut = 80; $test3_cut = 90;
echo "<h3>�������� ���� �հ� ������ <br>
<h4>�ʱ� ���� $test1_cut �� �̻�<br>
<h4>�Ǳ� ���� $test2_cut �� �̻�<br>
<h4>�������� ���� $test3_cut �� �̻��Դϴ�.<br>
<h4>ȹ���� �ʱ� ���� : $test1 ��, $test2 ��, $test3 ��<br><br>";

if( ($test1 >= $test1_cut) && ($test2 >= $test2_cut) && ($test3 >= $test3_cut) ){
echo "�հ��ϼ̽��ϴ�! �����մϴ�!";
}
else {
echo "�˼��մϴ�. ���հ��Դϴ�.";
}

?>