<?php

abstract class Pessoa
{
  protected $nome;
  protected $idade;
  protected $sexo;
  protected $experiencia;

  public function __construct($nome, $idade, $sexo)
  {
    $this -> nome = $nome;
    $this -> idade = $idade;
    $this -> sexo = $sexo;
    $this -> experiencia = 0;
  }

  protected function ganharExp($n): void
  {
    $this -> experiencia += $n;
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
  
  public function getExperiencia(): string
  {
    return $this -> experiencia;
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
  
  public function setExperiencia($experiencia): void
  {
    $this -> experiencia = $experiencia;
  }
  
}
