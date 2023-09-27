<?php

abstract class Animal
{
  protected $peso, $idade, $membros;

  public abstract function emitirSom();

  public function getPeso(): float
  {
    return $this -> peso;
  }
  
  public function getIdade(): int
  {
    return $this -> idade;
  }
  
  public function getMembros(): string
  {
    return $this -> membros;
  }
  
  public function setPeso($peso): void
  {
    $this -> peso = $peso;
  }
  
  public function setIdade($idade): void
  {
    $this -> idade = $idade;
  }
  
  public function setMembros($membros): void
  {
    $this -> membros = $membros;
  }
  
}
