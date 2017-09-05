<?php
	$x=5;
	$y=10.5;
	$z=3;
	
	function contohVar() {
		global $x, $y, $z;
		echo "Variabel global z yaitu $z";
		echo "<br>";
		$y = $x + $y;
		$a = 1;
		echo "Variabel local a yaitu $a";
		
	}
	
	contohVar();
	echo "<br>";
	echo "$y";
	
	function contohVarLagi() {
		static $b = 0; //untuk menginisiasi awal
		echo $b;
		$b++;
	}
	echo "<br>";
	contohVarLagi();
	echo "<br>";
	contohVarLagi();
	echo "<br>";
	contohVarLagi();
	echo "<br>";
	contohVarLagi();
	echo "<br>";
?>