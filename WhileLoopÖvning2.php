<?php

while(true) {
	if (PHP_OS == 'WINNT') {
		echo 'Skriv in ett ord (avsluta = stopp) : ';
		$in = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
		$in = readline('Skriv in ett ord (avsluta = stopp) : ');
}

    echo("Du skrev ordet: $in\n");
	if ($in == "stopp")
	{         
		echo("Programmet stoppat!\n");
		break;     
	} 
} 
?>