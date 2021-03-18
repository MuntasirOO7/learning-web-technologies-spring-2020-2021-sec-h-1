<?php
	$a = 0;
	$search = "Mun";
	$arr = [1, 8, 3, 9, 1, 9, 7, 3, "Mun", "ta" "sir"];
	foreach ($arr as $value) {
		if ($value == $search) {
			$a = 1;
		}
	}
	if ($a == 1) {
			echo "Here it is :" . $search;
		}
		else{
			echo "failed to found";
		}
?>