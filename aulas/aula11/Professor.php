<?php
require_once 'Pessoa.php';

class Professor extends Pessoa
{
  private $especialidade;
  private $salario;

  public function receberAumento($valor): void
  {
    $this -> setSalario($this -> getSalario() + $valor);
  }

  public function getEspecialidade(): string
  {
    return $this -> especialidade;
  }

  public function getSalario(): float
  {
    return $this -> salario;
  }

  public function setEspecialidade($especialidade): void
  {
    $this -> especialidade = $especialidade;
  }

  public function setSalario($salario): void
  {
    $this -> salario = $salario;
  }

}
