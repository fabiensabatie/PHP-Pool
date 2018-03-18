#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	$str = split("[ :]", $argv[1]);
	$str[0] = ucfirst($str[0]);
	$str[2] = ucfirst($str[2]);
	$days = array(
		"Lundi" => 1,
		"Mardi" => 2,
		"Mercredi" => 3,
		"Jeudi" => 4,
		"Vendredi" => 5,
		"Samedi" => 6,
		"Dimanche" => 7
	);
	$months = array(
		"Janvier" => 1,
		"Février" => 2,
		"Mars" => 3,
		"Avril" => 4,
		"Mai" => 5,
		"Juin" => 6,
		"Juillet" => 7,
		"Août" => 8,
		"Septembre" => 9,
		"Octobre" => 10,
		"Novembre" => 11,
		"Décembre" => 12
	);
	$str[0] = $days[$str[0]];
	$str[2] = $months[$str[2]];
	foreach ($str as $elem) {
		if (empty($elem)) {
			echo "Wrong format.\n";
			return;
		}
	}
	if ($str[0] && $str[1] && $str[2] && $str[3] && $str[4] && $str[5] && $str[6])
		$t = mktime($str[4], $str[5], $str[6], $str[2], $str[1], $str[3]);
	else {
		echo "Wrong format.\n";
		return;
	}
	echo $t . "\n";
?>
