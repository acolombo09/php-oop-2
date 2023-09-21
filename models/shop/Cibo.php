<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto {
  protected $peso;
  protected $scadenza;

  public function getPeso() {
    return $this->peso;
  }
}

?>

