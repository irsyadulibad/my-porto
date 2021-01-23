<?php

function age($birthDate) {
	$diff = date_diff(date_create($birthDate), date_create('now'));
	return $diff->y;
}

function elapsed_time($date) {
	$date = strtotime($date);
	$time = time() - $date;
	$time = ($time < 1) ? 1 : $time;
	$tokens = array (
		31536000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach ($tokens as $unit => $text) {
		if ($time < $unit) continue;
		$numberOfUnits = floor($time / $unit);
		return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
	}
}
