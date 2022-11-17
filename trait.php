<?php

trait SayGoodbye {
	function goodBye(?string $name):void{
		if(is_null($name)){
			echo "Good Bye" . PHP_EOL;
		}else{
			echo "Good Bye $name" . PHP_EOL;
		}
	}
}

trait SayHello {
	function hello(?string $name):void{
		if(is_null($name)){
			echo "Hello!!".PHP_EOL;
		}else {
			echo "Hello $name".PHP_EOL;
		}
	}
}

trait HasName{
	public string $name;
}

trait CanRun{
	public abstract function canRun(): void;
}

trait All{
	use SayGoodbye, SayHello, HasName, CanRun;
}

class Person {
	use All{
		goodBye as private;
	}

	public function canRun(): void{
		echo "person $this->name is running" . PHP_EOL;
	}

	function hello(?string $name){
		echo "function ini dioverride pada class child" . PHP_EOL;
	}
}

$obj = new Person();
$obj->name = "Ikhlash Mulya";
$obj->hello("Ikhlash");
$obj->canRun();
//$obj->goodBye($obj->name); akan error karena diubah menjadi private di class child
