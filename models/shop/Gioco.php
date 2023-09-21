<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto {
  protected $material;
  protected $color;

  public function getColor() {
    return $this->color;
  }
}

?>

