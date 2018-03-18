#!/usr/bin/php
<?php

	function cr_sort($tab)
	{
		$count = count($tab);
		for ($i = 0; $i < $count - 1; $i++) {
			if (!($tab[$i] < $tab[$i + 1]))
				return (0);
		}
		return (1);
	}

	function de_sort($tab)
	{
		$count = count($tab);
		for ($i = 0; $i < $count - 1; $i++) {
			if (!($tab[$i] > $tab[$i + 1]))
				return (0);
		}
		return (1);
	}

	function ft_is_sort($tab)
	{
		if (cr_sort($tab) || de_sort($tab))
			return (1);
		return (0);
	}
?>
