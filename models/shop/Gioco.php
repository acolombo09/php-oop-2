<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto {
  protected $material;
  protected $color;

  public function getColor() {
    return $this->color;
  }
  public function setColor($color) {
    $this->color = $color;

    return $this;
  }

  public function getMaterial() {
    return $this->material;
  }
  public function setMaterial($material) {
    $this->material = $material;

    return $this;
  }
}

?>

