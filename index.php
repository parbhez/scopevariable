<?php


	$name = "Masud"; //Global scope

	function hello() {
		//using global keyword
		// global $name;
		// echo $name;
		//using $GLOBALS super global
		echo $GLOBALS['name'];

		$fruits = 'Mango'; //Local scope
		static $fruits = 'Mango'; //Static scope
	}

	hello();

	function birthDay() {
		static $age = 1;
		echo "\n";
		$age++;
		echo $age;

	}

	birthDay();
	birthDay();
	birthDay();
	birthDay();
	birthDay();
	birthDay();
	birthDay();
	birthDay();
	birthDay();