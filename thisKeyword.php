<?php

//Membuat Class
class Person{

	//membuat propertie
	//var $nama;
	//var $address;

	//kita bisa mendeklarasikan type data nya
	//var string $nama;
	//var string $address;
	var int $noRumah;

	//kita bisa membuat default value
	var string $nama = "Anonymous";

	//membuat nullable properties
	var ?string $address = null;

	//membuat function
	function sayHello(?string $nama){
		if( is_null($nama) ){
			//this keyword untuk mengakses properties object saat ini/di dalam class
			echo "Hello my name is {$this->nama}!" . PHP_EOL;
		}else {
			echo "Hello $nama! my name is {$this->nama}!" . PHP_EOL;
		}
	}
	
}

//Membuat Object dari Class
$person1 = new Person();

//memanipulasi properties pada object
$person1->nama = "Ikhlash";
$person1->address = "Cianjur";
$person1->noRumah = 16;

//memanggil function
$person1->sayHello("Budi");

echo PHP_EOL;

var_dump($person1);
