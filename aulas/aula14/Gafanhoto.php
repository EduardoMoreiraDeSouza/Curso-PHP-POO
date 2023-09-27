<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
  private $login;
  private $totAssistido;

  public function __construct($nome, $idade, $sexo, $login)
  {
    $this -> login = $login;
    $this -> totAssistido = 0;
  }

  public function getLogin(): bool
  {
    return $this -> login;
  }
  
  public function getTotAssistido(): int
  {
    return $this -> totAssistido;
  }
  
  public function setLogin($login): void
  {
    $this -> login = $login;
  }
  
  public function setTotAssistido($totAssistido): void
  {
    $this -> totAssistido = $totAssistido;
  }
  
  public function viuMaisUm(): void
  {
    $this -> totAssistido++;
  }
  
}
