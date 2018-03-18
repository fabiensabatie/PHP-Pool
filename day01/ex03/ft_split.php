<?php
	function ft_split($str)
	{
		$tab = explode(' ', $str);
		$ret = array();
		foreach ($tab as $index => $word) {
			if (strlen($word))
				array_push($ret, $word);
		}
		sort($ret);
		return ($ret);
	}
?>
