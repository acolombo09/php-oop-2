<?php

class Categoria {
  protected $name;
  protected $icon;

  // imposto il costruttore sulla classe genitore dove obbligo a passare gli argomenti
  // verranno poi sovrascritti da altri constructor vuoti nelle classi figlie
  function __construct($name, $icon) {
    $this->name = $name;
    $this->icon = $icon;
  }

  // setting e getting functions per accedere alla proprietà protected
  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  public function getIcon() {
    return $this->icon;
  }

  public function setIcon($icon) {
    $this->icon = $icon;

    return $this;
  }
}

?>

