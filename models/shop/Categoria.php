<?php


class Categoria {
  protected $name;
  protected $icon;

  // Setto la constructor function
  function __construct($name, $icon) {
    $this->name = $name;
    $this->icon = $icon;
  }

  // getting functions
  public function getName() {
    return $this->name;
  }

  // setting functions
  public function setName($name) {
    $this->name = $name;

    return $this;
  }
}

?>

