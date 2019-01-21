<?php 
 
if (PHP_OS == 'WINNT') {     
	echo 'Mata in start: ';
       	$start = stream_get_line(STDIN, 1024, PHP_EOL);
} else 
{     
	$start = readline('Mata in start: ');
} 
if (PHP_OS == 'WINNT') {     
	echo 'Mata in stopp: ';
       	$stop = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
       	$stop = readline('Mata in stopp: ');
} 
if (PHP_OS == 'WINNT') {
       	echo 'Mata in steg: ';
       	$steg = stream_get_line(STDIN, 1024, PHP_EOL);
} else {     
	$steg = readline('Mata in steg: ');
} 
 
for ($x = $start; $x <= $stop; $x = $x + $steg)
{     
	echo("$x ");
} 
?>