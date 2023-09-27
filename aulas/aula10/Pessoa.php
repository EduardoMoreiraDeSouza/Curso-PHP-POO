<?php

class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;

  public function fazerAniv()
  {
    return $this -> getIdade() + 1;
  }

  public function getNome(): string
  {
    return $this -> nome;
  }

  public function getIdade(): int
  {
    return $this -> idade;
  }

  public function getSexo(): string
  {
    return $this -> sexo;
  }

  public function setNome($nome): void
  {
    $this -> nome = $nome;
  }

  public function setIdade($idade): void
  {
    $this -> idade = $idade;
  }

  public function setSexo($sexo): void
  {
    $this -> sexo = $sexo;
  }
  
}
