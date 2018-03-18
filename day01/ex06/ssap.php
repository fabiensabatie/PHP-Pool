#!/usr/bin/php
<?php

	$ret = array();
	foreach($argv as $i => $arg)
		if ($i != 0)
		{
			$str = trim($arg);
			$tab = explode(' ', $str);
			foreach ($tab as $index => $word) {
				if (strlen($word))
					array_push($ret, $word);
			}
		}
	sort($ret);
	foreach ($ret as $word)
		echo $word . "\n";
?>
