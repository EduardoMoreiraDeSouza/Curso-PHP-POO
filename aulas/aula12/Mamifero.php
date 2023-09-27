<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
  private $corPelo;

  public function alimentar(): void
  {
    echo "Mamando";
  }
  
  public function emitirSom(): void
  {
    echo "Som de Mamifero";
  }
  
  public function locomover(): void
  {
    echo "Correndo";
  }
  
  public function getCorPelo(): string
  {
    return $this -> corPelo;
  }

  public function setCorPelo($corPelo): void
  {
    $this -> corPelo = $corPelo;
  }

}
