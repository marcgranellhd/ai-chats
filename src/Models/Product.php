<?php

namespace Models;

class Product {
    private $id;
    private $name;
    private $price;
    private $description;

    public function __construct($id, $name, $price, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function save() {
        // Code to save the product to the database
    }

    public static function retrieve($id) {
        // Code to retrieve a product from the database by ID
    }

    public static function getAll() {
        // Code to retrieve all products from the database
    }

    public function update() {
        // Code to update the product in the database
    }

    public function delete() {
        // Code to delete the product from the database
    }
}