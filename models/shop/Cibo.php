<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto {
  protected $peso;
  protected $scadenza;

  public function getPeso() {
    return $this->peso;
  }
  public function setPeso($peso) {
    $this->peso = $peso;

    return $this;
  }

  public function getScadenza() {
    return $this->scadenza;
  }
  public function setScadenza($scadenza) {
    $this->scadenza = $scadenza;

    return $this;
  }
}

?>

