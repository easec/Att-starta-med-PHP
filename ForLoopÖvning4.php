<?php 
$tal = 0; 
$hittat = false; 

if (PHP_OS == 'WINNT') {
	echo 'Mata in ett heltal: ';
	$tal = stream_get_line(STDIN, 1024, PHP_EOL);
} else {     
	$tal = readline('Mata in ett heltal: '); 
} 
for ($x = 1; $x <= $tal; $x++) 
{  
	if ($x % 3 == 0 || $x % 7 == 0)     
	{         
		echo("Talet $x delbart med 3 eller 7!\n");
		$hittat = true;
	}     if ($hittat = false)
		  {         
			  echo("Hittade inget tal delbart med 3 eller 7!\n");
		  }
} 
?>