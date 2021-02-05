<?
if($age < 4 || $age > 69){
$price = 0;
	if($bokji == 'y'){
		$welfare = 'Yes';
	}
	elseif($bokji == 'n'){
		$welfare = 'No';
	}
	if($ugong == 'y'){
		$youkong = 'Yes';
	}
	elseif($ugong == 'n'){
		$youkong = 'No';
	}
	if($yagan == 'y'){
		$night = 'Yes';
	}
	elseif($yagan == 'n'){
		$night = 'No';
	}
}
elseif($yagan == 'n'){
	$price = 10000;
	if($bokji == 'y'){
		$price = 8000;
		$welfare = 'Yes';
	}
	elseif($bokji == 'n'){
		$welfare = 'No';
	}
	if($ugong == 'y'){
		$price = 8000;
		$youkong = 'Yes';
	}
	elseif($ugong == 'n'){
		$youkong = 'No';
	}
	$night = 'No';
	}
elseif($yagan == 'y'){
	$price = 4000;
	if($bokji == 'y'){
		$welfare = 'Yes';
	}
	elseif($bokji == 'n'){
		$welfare = 'No';
	}
	if($ugong == 'y'){
		$youkong = 'Yes';
	}
	elseif($ugong == 'n'){
		$youkong = 'No';
	}
	$night = 'Yes';
}
if($age == '일반인'){
	$price = 10000;
	if($yagan == 'y'){
		$price = 4000;
		if($bokji == 'y'){
			$welfare = 'Yes';
		}
		elseif($bokji == 'n'){
			$welfare = 'No';
		}
		if($ugong == 'y'){
			$youkong = 'Yes';
		}
		elseif($ugong == 'n'){
			$youkong = 'No';
		}
	}
	elseif($yagan == 'n'){
		if($bokji == 'y'){
			$price = 8000;
			$welfare = 'Yes';
		}
		elseif($bokji == 'n'){
			$welfare = 'No';
		}
		if($ugong == 'y'){
			$price = 8000;
			$youkong = 'Yes';
		}
		elseif($ugong == 'n'){
			$youkong = 'No';
		}
	}
}
echo "나이 : $age 세<br>
복지카드 소지 : $welfare<br>
국가 유공자증 소지 : $youkong <br>
17시 10분 이후 입장 : $night <br>
<h2>입장료 : $price";