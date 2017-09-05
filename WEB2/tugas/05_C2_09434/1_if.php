<?php
	$nilai = "C-";
	
	if ($nilai == "A" || $nilai == "A-" || $nilai == "A/B" || $nilai == "B+" || $nilai == "B" || $nilai == "B-" || $nilai == "B/C") {
		echo "LULUS";
	} elseif ($nilai == "C+" || $nilai == "C" || $nilai == "C-" || $nilai == "C/D" ) {
		echo "LULUS SEBAIKNYA DIULANG";
	} elseif ($nilai == "D+" || $nilai == "D") {
		echo "LULUS & WAJIB DIULANG";
	} else {
		echo "TIDAK LULUS";
	}
?>