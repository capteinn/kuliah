<?php
	$nilai = "A";
	
	switch($nilai) {
		case $nilai == "A" || $nilai == "A-" || $nilai == "A/B" || $nilai == "B+" || $nilai == "B" || $nilai == "B-" || $nilai == "B/C":
			echo "LULUS";
			break;
		case $nilai == "C+" || $nilai == "C" || $nilai == "C-" || $nilai == "C/D":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $nilai == "D+" || $nilai == "D":
			echo "LULUS & WAJIB DIULANG";
			break;
		default:
			echo "TIDAK LULUS";
			break;
	}
?>