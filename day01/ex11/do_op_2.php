#!/usr/bin/php
<?php
	if ($argc != 2)
	{
		echo "Syntax Error\n";
		return ;
	}
	$str = $argv[1];
	$tab = split("[*%+-/]", $str);
	if (count($tab) > 2)
	{
		echo "Syntax Error\n";
		return ;
	}
	$f =$tab[0];
	$s =$tab[1];
	$i = 0;
	while (is_numeric($str[$i]) || $str[$i] === ' ')
		$i++;
	$op = $str[$i];
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
		echo "Syntax Error\n";
?>
