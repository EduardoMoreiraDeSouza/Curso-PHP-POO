<?php
require_once 'Pessoa.php';
class Professor extends Pessoa
{
  private $esperado;
  private $salario;

  public function receberAum($aum): void
  {
    $this -> setSalario($this -> getSalario() + $aum);
  }

  public function getEsperado(): string
  {
    return $this -> esperado;
  }

  public function getSalario(): float
  {
    return $this -> salario;
  }

  public function setEsperado($esperado): void
  {
    $this -> esperado = $esperado;
  }

  public function setSalario($salario): void
  {
    $this -> salario = $salario;
  }
  
}
