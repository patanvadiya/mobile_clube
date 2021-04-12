<?php


	$array = array(1,2,5,4);

	$count = count($array);
	echo "<pre>";

	foreach ($array as $value) {

		echo $value."<br>";
	}
	echo "<br>";
	for ($i = 0; $i < $count; $i++) {
	    for ($j = $i + 1; $j < $count; $j++) {
	        if ($array[$i] > $array[$j]) {
	            $temp = $array[$i];
	            $array[$i] = $array[$j];
	            $array[$j] = $temp;
	        }
	    }
	}
	echo "Sorted Array:" . "<br/>";
	echo "<br>";
	foreach ($array as $value) {

		echo $value."<br>";
	}
