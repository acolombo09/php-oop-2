<?php
require_once __DIR__ . '/Categoria.php';

class Prodotto {
  protected $name;
  protected $description;
  protected $price;
  protected Categoria $category; //istanza di classe

  // Setto la constructor function
  function __construct($name, $description, $price, Categoria $category) {
    $this->setName($name);
    $this->setDescription($description);
    $this->setPrice($price);
    $this->setCategory($category);
  }

  // getting functions
  public function setName($name) {
    $this->name = $name;

    return $this;
  }
  public function setDescription($description) {
    $this->description = $description;

    return $this;
  }
  public function setPrice($price) {
    $this->price = $price;

    return $this;
  }
  public function setCategory($category) {
    $this->category = $category;

    return $this;
  }
}

?>

