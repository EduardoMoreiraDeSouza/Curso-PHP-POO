<?php
require_once 'Aluno.php';
class Tecnico extends Aluno
{
  private $registroProfissional;

  public function praticar(): void
  {
    echo "O aluno técnico " . $this -> getNome() . "praticou a profissão";
  }

  public function getRegistroProfissional(): string
  {
    return $this -> registroProfissional;
  }

  public function setRegistroProfissional($registroProfissional): void
  {
    $this -> registroProfissional = $registroProfissional;
  }
  
}
