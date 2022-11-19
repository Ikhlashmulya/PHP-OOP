<?php

class Data implements IteratorAggregate {

	var string $first = "First";
	public string $second = "Second";
	protected string $third = "Third";
	private string $fourth = "Fourth";

	public function getIterator(){
		return new ArrayIterator([
			"first" => "First",
			"second" => "Second",
			"third" => "Third",
			"fourth" => "Fourth"
		]);
	}
}

$obj = new Data();

foreach($obj as $key => $value){
	echo "$key : $value" . PHP_EOL;
}
