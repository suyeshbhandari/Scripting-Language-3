<?php

interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake() { return $this->make; }
    public function setMake($make) { $this->make = $make; }

    public function getModel() { return $this->model; }
    public function setModel($model) { $this->model = $model; }

    public function getYear() { return $this->year; }
    public function setYear($year) { $this->year = $year; }

    public function start() {
        echo "Car started.\n";
    }

    public function displayInfo() {
        echo "$this->make $this->model ($this->year)\n";
    }

    public function getDescription() {
        return "Car: $this->make $this->model ($this->year)";
    }

    public function startEngine() {
        echo "Engine started.\n";
    }

    public function stopEngine() {
        echo "Engine stopped.\n";
    }
}

class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Charging battery of $this->batteryCapacity kWh.\n";
    }

    public function getDescription() {
        return parent::getDescription() . " - Electric, Battery: {$this->batteryCapacity} kWh";
    }
}

$car = new Car("Toyota", "Corolla", 2020);
$car->start();
$car->displayInfo();
$car->startEngine();
$car->stopEngine();
echo $car->getDescription() . "\n";

$ecar = new ElectricCar("Tesla", "Model 3", 2023, 75);
$ecar->start();
$ecar->displayInfo();
$ecar->charge();
echo $ecar->getDescription() . "\n";
