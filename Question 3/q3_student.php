<?php

class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition = 5000;
    protected $indexNumber = 101;

    public function getName() { return $this->name; }
    public function getSurname() { return $this->surname; }

    public function helloWorld() {
        return "Hello World";
    }

    protected function helloFamily() {
        return "Hello Family";
    }

    private function helloMe() {
        return "Hello me!";
    }

    private function getTuition() {
        echo "Tuition: $this->tuition\n";
    }
}

class PartTimeStudent extends Student {
    public function helloParent() {
        return $this->helloFamily();
    }
}

$student = new Student();
$student->name = "John";
$student->surname = "Doe";
$student->country = "Nepal";
echo $student->getName() . " " . $student->getSurname() . "\n";
echo $student->helloWorld() . "\n";

$ptStudent = new PartTimeStudent();
$ptStudent->name = "Jane";
$ptStudent->surname = "Smith";
echo $ptStudent->getName() . " " . $ptStudent->getSurname() . "\n";
echo $ptStudent->helloWorld() . "\n";
echo $ptStudent->helloParent() . "\n";
