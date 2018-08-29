<?php
	
	$a = 4;
	$b = 6;
	$teks;
	
	for($i = 0; $i < 5; $i++)
	{
		$teks = $a.$a;
		$teks2 = "";
		
		for($j = 0; $j <= $a; $j++){
			$teks2 = $teks2.$b;  
		}
		
		echo $teks.$teks2;
		echo "<br>";
		
		$a = $a-1;
		$b = $b-1;
	}
?>