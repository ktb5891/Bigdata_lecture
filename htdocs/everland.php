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
if($age == '�Ϲ���'){
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
echo "���� : $age ��<br>
����ī�� ���� : $welfare<br>
���� �������� ���� : $youkong <br>
17�� 10�� ���� ���� : $night <br>
<h2>����� : $price";