<?php

class Programmer {
	public string $name;

	public function __construct($name){
		$this->name = $name;
	}
}

class Backend extends Programmer {}

class Frontend extends Programmer {}


function sayHelloProgrammer($programmer){
	if( $programmer instanceof Frontend ){
		echo "Hello Frontend Programmer $programmer->name " . PHP_EOL;
		//var_dump($programmer);
	}else if( $programmer instanceof Backend ){
		echo "Hello Backend Programmer $programmer->name " . PHP_EOL;
		//var_dump($programmer);
	}else if( $programmer instanceof Programmer ){
		echo "Hello Programmer $programmer->name " . PHP_EOL;
		//var_dump($programmer);
	}

}

sayHelloProgrammer(new Programmer("Ikhlash"));
sayHelloProgrammer(new Backend("Mulya"));
sayHelloProgrammer(new Frontend("Nurahman"));

