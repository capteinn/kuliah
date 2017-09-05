<?php
	$ganjil = 0;
	for ($i=1; $i<=100; $i++) {
		if ($i%2 != 0){
			$ganjil++;
		}
	}
	echo "Banyaknya bilangan ganjil dari 1-100 adalah $ganjil";
?>