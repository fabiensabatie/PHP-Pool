#!/usr/bin/php
<?php

	$let = array();
	$num = array();
	$oth = array();
	foreach($argv as $i => $arg)
	{
		if ($i != 0)
		{
			$str = trim($arg);
			$tab = explode(' ', $str);
			foreach ($tab as $index => $word) {
				if (strlen($word))
				{
					if (is_numeric($word))
						array_push($num, $word);
					else if (ctype_alpha($word))
						array_push($let, $word);
					else
						array_push($oth, $word);
				}
			}
		}
	}
	natcasesort($let);
	natcasesort($num);
	natcasesort($oth);
	foreach ($let as $word)
		echo $word . "\n";
	foreach ($num as $word)
		echo $word . "\n";
	foreach ($oth as $word)
		echo $word . "\n";
?>
