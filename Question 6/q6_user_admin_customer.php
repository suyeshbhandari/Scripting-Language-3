<?php

class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function printFullName() {
        echo "$this->name $this->surname" . ($this->is_admin ? " (admin)" : "") . "\n";
    }
}

class Customer extends User {
    private $city;
    private $state;
    private $country;

    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

    public function getCity() { return $this->city; }
    public function setCity($city) { $this->city = $city; }

    public function getState() { return $this->state; }
    public function setState($state) { $this->state = $state; }

    public function getCountry() { return $this->country; }
    public function setCountry($country) { $this->country = $country; }

    public function location() {
        return "$this->city, $this->state, $this->country";
    }
}

class AdminUser extends User {
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

$user = new User("John", "Doe", "jdoe");
$user->printFullName();

$customer = new Customer("Jane", "Smith", "jsmith");
$customer->setCity("Kathmandu");
$customer->setState("Bagmati");
$customer->setCountry("Nepal");
$customer->printFullName();
echo $customer->location() . "\n";

$admin = new AdminUser("Mike", "Ross", "mross");
$admin->printFullName();
