<?php

class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;

  public function __construct($no, $id, $se)
  {
    $this -> nome = $no;
    $this -> idade = $id;
    $this -> sexo = $se;
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

  public function setNome($no): void
  {
    $this -> nome = $no;
  }

  public function setIdade($id): void
  {
    $this -> idade = $id;
  }
  
  public function setSexo($se): void
  {
    $this -> sexo = $se;
  }

  public function fazerAniver(): void
  {
    $this -> setIdade($this -> getIdade() + 1);
    echo $this -> getNome() . " fez aniversário agora tem " . $this -> getIdade() . " anos de idade. Parabéns.";
  }
}
