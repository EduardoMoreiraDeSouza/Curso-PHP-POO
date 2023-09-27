<?php
require_once 'Animal.php';

class Peixe extends Animal
{
  private $corEscama;

  public function soltarBolha(): void
  {
    echo "Soltou uma Bolha";
  }
  
  public function alimentar(): void
  {
    echo "Comendo substâncias";
  }

  public function emitirSom(): void
  {
    echo "Peixe não faz som";
  }

  public function locomover(): void
  {
    echo "Nadando";
  }

  function getCorEscama(): string
  {
    return $this -> corEscama;
  }

  function setCorEscama($corEscama): void
  {
    $this -> corEscama = $corEscama;
  }

}
