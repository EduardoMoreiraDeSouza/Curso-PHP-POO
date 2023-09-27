<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
  private $matricula;
  private $curso;

  public function pagarMensalidade(): void
  {
    echo "<p>Pagando mensalidade do aluno: </p>" . $this -> getNome();
  }
  public function getMatricula(): string
  {
    return $this -> matricula;
  }
  public function getCurso(): string
  {
    return $this -> curso;
  }
  public function setMatricula($matricula): void
  {
    $this -> matricula = $matricula;
  }
  public function setCurso($curso): void
  {
    $this -> curso = $curso;
  }
}
