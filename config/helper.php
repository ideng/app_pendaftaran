<?php
function input_get($input_name = '', $is_array = FALSE) {
	if ($is_array) {
		$filter = filter_input(INPUT_GET, $input_name, FILTER_DEFAULT , FILTER_REQUIRE_ARRAY);
	} else {
		$filter = filter_input(INPUT_GET, $input_name);
	}
	return $filter;
}