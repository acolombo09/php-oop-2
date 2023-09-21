<?php
require_once __DIR__ . '/Categoria.php';

class Prodotto {
  protected $name;
  protected $description;
  protected $price;
  protected Categoria $category; //istanza di classe categoria , fa da collegamento 

  // Setto la constructor function
  function __construct($name, $description, $price, Categoria $category) {
    $this->setName($name);
    $this->setDescription($description);
    $this->setPrice($price);
    $this->setCategory($category);
  }

  // getting e setting functions

  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  public function getDescription() {
    return $this->description;
  }
  public function setDescription($description) {
    $this->description = $description;

    return $this;
  }

  public function getPrice() {
    return $this->price;
  }
  public function setPrice($price) {
    $this->price = $price;

    return $this;
  }

  public function getCategory() {
    return $this->category;
  }
  public function setCategory($category) {
    $this->category = $category;

    return $this;
  }
}

?>

