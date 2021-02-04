<?
if($a > $b){
    if($a > $c){
        $max1 = $a;
        if($b > $c){
            $max2 = $b;
            $max3 = $c;
        }
        else{
            $max2 = $c;
            $max3 = $b;
        }
    }
    else{
        $max1 = $c;
        $max2 = $a;
        $max3 = $b;
    }
}
else{
    if($a > $c){
        $max1 = $b;
        $max2 = $a;
        $max3 = $c;
    }
    else{
        if($b > $c){
            $max1 = $b;
            $max2 = $c;
            $max3 = $a;
        }
    }
}
echo "가장 큰 수는 $max1 <br>
다음으로 큰 수는 $max2 <br>
가장 작은 수는 $max3 입니다."
?>