#!/usr/bin/php
<?php
	$key = $argv[1];
	$tab = array();
	foreach ($argv as $i => $elems) {
		$elem = split(":", $elems);
		$elem[0] = trim($elem[0]);
		$elem[1] = trim($elem[1]);
		if ($i > 1 && $elem[0] === $key) {
			echo $elem[1] . "\n";
		}
	}
?>
