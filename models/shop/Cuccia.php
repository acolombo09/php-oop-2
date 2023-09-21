<?php
require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto {
  protected $fabric;
  protected $environment;

  public function getFabric() {
    return $this->fabric;
  }
  public function setFabric($fabric) {
    $this->fabric = $fabric;

    return $this;
  }

  public function getEnvironment() {
    return $this->environment;
  }
  public function setEnvironment($environment) {
    $this->environment = $environment;

    return $this;
  }
}

?>