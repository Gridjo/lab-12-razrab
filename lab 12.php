<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
/**
 * 
 */
class Animal
{
	public $food,$location;
	function __construct($food,$location)
	{
		$this->food=$food;
		$this->location=$location;
	}
	public function makeNoise()
	{
		echo "Животное издает звук";
	}
	public function eat()
	{
		echo "Животное ест";

	}
	public function sleap()
	{
		echo "Животное спит";
	}
	
}
/**
 * 
 */
class Dog extends Animal
{
	public $breed;
	
	function __construct($breed)
	{
		
		$this->breed=$breed;
	}
	public function makeNoise()
	{
		echo "Собака скулит<br>";
	}
	public function eat()
	{
		echo "Собака ест<br>";

	}
}
/**
 * 
 */
class Cat extends Animal
{
	public $speed;
	function __construct$speed)
	{
		
		$this->speed=$speed;
	}
	public function makeNoise()
	{
		echo "Кошка мурчит<br>";
	}
	public function eat()
	{
		echo "Кошка ест<br>";

	}
	public function rev()
	{
		echo "Кошка переворачивается на лапы<br>";
	}

}	
/**
 * 
 */
class Horse extends Animal
{
	public $hohma;
	function __construct(,$hohma)
	{
		
		$this->hohma=$hohma;
	}
	public function makeNoise()
	{
		echo "Лошадь ржет c громкостью".$this->hohma."<br>";
	}
	public function eat()
	{
		echo "Лошать ест<br>";

	}
}
$horse = new Horse("100db","солома","Стойла");
$horse->makeNoise();
$horse->eat();
$horse->sleap();

?>
</body>
</html>
