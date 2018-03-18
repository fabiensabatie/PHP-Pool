#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$line = fgets(STDIN);
	$line = trim($line);
	if (is_numeric($line))
	{
		$num = intval($line);
		if ($num % 2 == 0)
			echo "Le chiffre " . $num . " est Pair\n";
		else
			echo "Le chiffre " . $num . " est Impair\n";
	}
	else
		echo "'" . $line . "' n'est pas chiffre.\n";
}
?>
