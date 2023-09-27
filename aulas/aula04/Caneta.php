<?php
class Caneta
{
  private $modelo;
  private $cor;
  private $ponta;
  private $tampada;


  public function __construct($m, $c, $p)
  {

    $this -> modelo = $m;
    $this -> cor = $c;
    $this -> ponta = $p;
    $this -> tampar();
  }
  public function tampar(): void
  {
    $this -> tampada = true;
  }

  public function getModelo(): string
  {
    return $this -> modelo;
  }

  public function setModelo($m): void
  {
    $this -> modelo = $m;
  }

  public function getPonta(): string
  {
    return $this -> ponta;
  }
  
  public function setPonta($p): void
  {
    $this -> ponta = $p;
  }
}
