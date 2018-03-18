#!/usr/bin/php
<?php
	$str = trim($argv[1]);
	$tab = explode(' ', $str);
	$flag = 0;
	foreach ($tab as $index => $word) {
		if (strlen($word) && $index)
		{
			if ($flag)
				echo ' ';
			echo $word;
			$flag++;
		}
	}
	if (count($tab) > 1)
		echo ' ';
	echo $tab[0] . "\n";
?>
