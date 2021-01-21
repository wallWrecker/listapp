
<?php
const strict_types = 1;

class CarCollections{
	private $cars_collection = [];
	private $sorting_types = ["ascending", "descending"];
	public function getCollection():iterable {
		return $this->cars_collection;
	}

	public function setCar(string $carName):int {
		return array_push($this->cars_collection, $carName);
	}

	public function checkCarsExist(string $carName):bool {
		return in_array($carName, $this->cars_collection);
	}
}


$car = new CarCollections;
$car->setCar("Volvo");
$car->setCar("Volkswagen");
$car->setCar("Subaru");
$car->setCar("Nissan");

$whatCar = "Hyundai";

if ($isExist = $car->checkCarsExist($whatCar)) {
	echo "<p> This ". $whatCar ." is exist in the list. </p>" . "<br>";
} else { 
	echo "<p> This ". $whatCar." doesn't exist in the list. </p>" . "<br>";
}
$allCars = $car->getCollection();

function iterateFn(iterable $iterable) {
	$counter = 1;
	foreach($iterable as $item) {
		echo "Car " . $counter . ": " . $item . "<br>";
		$counter = $counter + 1;
	}
}