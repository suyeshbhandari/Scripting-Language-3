<?php

class Product {
    private $description;
    private $quantity;
    private $price;

    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: description must be a string.\n";
        } else {
            $this->description = $description;
        }

        if (!is_numeric($quantity)) {
            echo "Error: quantity must be a number.\n";
        } else {
            $this->quantity = $quantity;
        }

        if (!is_numeric($price)) {
            echo "Error: price must be a number.\n";
        } else {
            $this->price = $price;
        }
    }

    public function getDescription() { return $this->description; }
    public function setDescription($description) { $this->description = $description; }

    public function getQuantity() { return $this->quantity; }
    public function setQuantity($quantity) { $this->quantity = $quantity; }

    public function getPrice() { return $this->price; }
    public function setPrice($price) { $this->price = $price; }

    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

$product = new Product("Notebook", 5, 2.5);
echo "Description: " . $product->getDescription() . "\n";
echo "Quantity: " . $product->getQuantity() . "\n";
echo "Price: " . $product->getPrice() . "\n";
echo "Total: " . $product->calculatePrice() . "\n";
