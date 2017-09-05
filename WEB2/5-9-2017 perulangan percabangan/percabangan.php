<?php
	$x = 1;
	
	//percabangan menggunakan if else dan elseif
	if($x < 10) {
		echo $x += 5;
	} elseif ($x < 20) {
		echo $x += 10;
	} else {
		echo "Maaf angka yang dimasukkan salah!";
	}
	
	//percabangan menggunakan switch case
	switch($x) {
		case $x < 10:
			echo $x += 5;
			break;
		case $x < 20:
			echo $x += 10;
			break;
		default:
			echo "Maaf nilai yang dimaksud salah";
			break;
	}

?>