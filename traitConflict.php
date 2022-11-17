<?php

trait A {
	function doA(): void{
		echo "a" . PHP_EOL;
	}
	function doB(): void{
		echo "b" . PHP_EOL;
	}
}

trait B {
	function doA(): void{
		echo "A" . PHP_EOL;
	}
	function doB(): void{
		echo "B" . PHP_EOL;
	}
}

class TraitConflict{
	use A, B{
		A::doA insteadof B;//akan mengambil doA di trait A
		B::doB insteadof A;//akan mengambil doB di trait B
	}
}

$obj = new TraitConflict();
$obj->doA();
$obj->doB();
