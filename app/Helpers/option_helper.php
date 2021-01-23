<?php

use App\Models\Option;

function get_option($name = null) {
	$option = Option::getItem($name);
	$size = count($option);

	if($size > 1) {
		$data = [];

		foreach($option as $opt) {
			$data[][$opt->name] = esc($opt->value);
		}

		return $data;
	}

	if($size > 0) {
		return esc($option[0]->value);
	}

	return null;
}

function put_options(array $options, string $group = '') {
	$csrfName = csrf_token();
	// Exceptions name item to insert
	$excepts = [$csrfName, '_method'];

	foreach($options as $name => $value) {
		if(in_array($name, $excepts))
			continue;

		if(strlen($group) > 0)
			$name = "{$group}_{$name}";
		
		Option::putItem($name, esc($value));
	}

	return true;
}
