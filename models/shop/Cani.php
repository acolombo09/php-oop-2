<?php
require_once __DIR__ . '/Categoria.php';

class Cani extends Categoria{
  protected $name = 'Cani';
  protected $icon = 'cane.svg';

  // Setto la constructor function vuota
  // fai finta di nulla e non richiedere attributi
  function __construct() {

  }

}

?>

