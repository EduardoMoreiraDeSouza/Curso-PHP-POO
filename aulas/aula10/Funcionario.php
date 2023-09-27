<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa
{
  private $setor;
  private $trabalhando;

  public function mudarTrabalho(): void
  {
    $this -> setTrabalhando($this -> getTrabalhando());
  }

  public function getSetor(): string
  {
    return $this -> setor;
  }

  public function getTrabalhando(): bool
  {
    return $this -> trabalhando;
  }

  public function setSetor($setor): void
  {
    $this -> setor = $setor;
  }

  public function setTrabalhando($trabalhando): void
  {
    $this -> trabalhando = $trabalhando;
  }
  
}
