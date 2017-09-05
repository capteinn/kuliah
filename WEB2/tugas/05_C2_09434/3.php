<?php
	$kelipatantuju = 0;
	for ($i=0; $i<100; $i++) {
		if ($i%7 == 0){
			$kelipatantuju++;
		}
	}
	echo "Banyaknya bilangan kelipatan 7 yang kurang dari 100 adalah $kelipatantuju";
?>