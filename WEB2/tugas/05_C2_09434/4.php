<?php
	$status = "married"; //single or married
	$pendapatan = 64000;
	
	echo "Pendapatan Anda $$pendapatan<br>";
	echo "Status Anda <b>$status</b><br>";
	echo "--------------------------------<br>";
	
	if (($pendapatan > 0 && $pendapatan <= 32000 && $status == "single") || ($pendapatan > 0 && $pendapatan <= 64000 && $status == "married")) {
		$pajak = $pendapatan * 0.1;
		$hasil = $pendapatan - $pajak;
		echo "Pajak Anda adalah 10% yakni $$pajak <br>";
		echo "Pendapatan Anda saat ini setelah dikurangi pajak adalah $$hasil";
	} else {
		if ($status=="single") {
			$pajak = ($pendapatan * 0.25) + 3200;
			$hasil = $pendapatan - $pajak;
			echo "Pajak Anda adalah 25% + $3,200 yakni $$pajak <br>";
		} else {
			$pajak = ($pendapatan * 0.25) + 6400;
			$hasil = $pendapatan - $pajak;
			echo "Pajak Anda adalah 25% + $6,400 yakni $$pajak <br>";
		}
		
		echo "Pendapatan Anda saat ini setelah dikurangi pajak adalah $$hasil";			
		
	}

?>