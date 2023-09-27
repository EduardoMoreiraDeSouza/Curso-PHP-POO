<?php
require_once 'Animal.php';

class Mamifero extends Animal
{
  protected $corPelo;

  function locomover(): void
  {
    /*  */
  }

  function alimentar(): void
  {
    /*  */
  }

  function emitirSom(): void
  {
    echo "Som de mamifero ";
  }

  function getCorPelo(): string
  {
    return $this -> corPelo;
  }
  function setCorPelo($corPelo): void
  {
    $this -> corPelo = $corPelo;
  }
}
