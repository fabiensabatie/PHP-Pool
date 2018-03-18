#!/usr/bin/php
<?php
	$str = trim($argv[1]);
	$tab = split("[ \t]", $str);
	$flag = 0;
	foreach ($tab as $index => $word) {
		if (strlen($word)) {
			if ($flag)
				echo ' ';
			echo $word;
			$flag++;
		}
	}
	echo "\n";
?>
