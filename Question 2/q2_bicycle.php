<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight;

    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
        $this->description = $description;
    }

    public function getInfo() {
        return "$this->brand $this->model ($this->year)";
    }

    public function getWeight($inKg = false) {
        return $inKg ? $this->weight / 1000 : $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

$bike1 = new Bicycle("Trek", "Marlin 7", 2022, 13500);
$bike2 = new Bicycle("Giant", "Escape 3", 2021, 12800, "Brand new");

foreach ([$bike1, $bike2] as $bike) {
    echo $bike->getInfo() . "\n";
    echo "Weight (kg): " . $bike->getWeight(true) . "\n";
    echo "Weight (g): " . $bike->getWeight() . "\n";
}
