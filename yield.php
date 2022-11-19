<?php

function getGanjil($maks){
	$array = [];
	for($i = 1;$i <= $maks;$i++){
		if($i % 2 == 1){
			$array[] = $i;
		}
	}
	return new ArrayIterator($array);
}

foreach(getGanjil(10) as $value){
	echo $value . PHP_EOL;
}


// Keyword yield untuk membuat iterator
function getGenap($maks): Iterator{
	for($i = 1;$i <= $maks;$i++){
		if($i % 2 == 0){
		       yield $i;
		}
	}
}

foreach(getGenap(10) as $value){
	echo $value . PHP_EOL;
}
