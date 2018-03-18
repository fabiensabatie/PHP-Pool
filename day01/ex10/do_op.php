#!/usr/bin/php
<?php
	if ($argc != 4)
	{
		echo "Incorrect Parameters\n";
		return ;
	}
	$f = intval(trim($argv[1]));
	$s = intval(trim($argv[3]));
	$op = trim($argv[2]);

	if ($op === '+')
		echo $f + $s . "\n";
	else if ($op === '-')
		echo $f - $s . "\n";
	else if ($op === '/')
		echo $f / $s . "\n";
	else if ($op === '*')
		echo $f * $s . "\n";
	else if ($op === '%')
		echo $f % $s . "\n";
	else
		echo "Incorrect Parameters\n";
?>
