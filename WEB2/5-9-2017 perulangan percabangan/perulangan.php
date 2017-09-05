<?php
	$x = 1;
	echo "Berikut ini urutan nilai 1 sampai 10 <br>";
	
	//perulangan menggunakan while
	while ($x <=  10) {
		echo "$x ";
		$x++;
	}
	
	echo "<br>";
	
	//perulangan menggunakan do while
	$y = 1;
	do {
		echo "$y ";
		$y++;
	}while($y <= 10);
	
	echo "<br>";
	
	//perulangan menggunakan for
	for ($i=1; $i<=10; $i++) {
		echo "$i ";
	}
	
	echo "<br>";
	
	$mahasiswa = array("Ana", "Denny", "Azka", "Linia");
	echo "Berikut daftar nama mahasiswa: <br>";
	
	foreach ($mahasiswa as $value) {
		echo "$value ";
	}
?>