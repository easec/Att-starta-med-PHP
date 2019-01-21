<?php

$summa = 0;
if (PHP_OS == 'WINNT') {
	echo 'Mata in ett heltal: ';
	$line = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
	$line = readline('Mata in ett heltal: \n');
}
for ($x = 1; $x <= $line; $x++)
{  
	$summa = $summa + $x; 
} 
echo("Summan av tal 1 till $line blev $summa \n");

?>