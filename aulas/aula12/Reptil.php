<?php
require_once 'Animal.php';
class Reptil extends Animal
{
  private $corEscama;

  public function alimentar(): void
  {
    echo "Comendo Vegetais";
  }
  
  public function emitirSom(): void
  {
    echo "Som de Réptil";
  }
  
  public function locomover(): void
  {
    echo "Rastejando";
  }

  public function getCorEscama(): string
  {
    return $this -> corEscama;
  }

  public function setCorEscama($corEscama): void
  {
    $this -> corEscama = $corEscama;
  }
  
}
