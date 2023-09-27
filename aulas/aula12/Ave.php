<?php
require_once 'Animal.php';

class Ave extends Animal
{
  private $corPena;

  public function fazerNinho(): void
  {
    echo "Construindo um ninho";
  }

  public function alimentar(): void
  {
    echo "Comendo Frutas";
  }

  public function emitirSom(): void
  {
    echo "Som de Ave";
  }

  public function locomover(): void
  {
    echo "Voando";
  }

  public function getCorPena(): string
  {
    return $this -> corPena;
  }

  public function setCorPena($corPena): void
  {
    $this -> corPena = $corPena;
  }

}
