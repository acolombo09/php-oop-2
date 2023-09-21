<?php
require_once __DIR__ . '/Categoria.php';

class Gatti extends Categoria{
  protected $name = 'Gatti';
  protected $icon = 'gatto.svg';

  // Setto la constructor function vuota
  // fai finta di nulla e non richiedere parametri
  function __construct() {

  }

}

?>

