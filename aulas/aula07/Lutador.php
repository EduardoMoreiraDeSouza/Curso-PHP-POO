<?php

class Lutador
{
  //Atributos
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria; #Peso leve, Peso Médio e Peso Pesado
  private $vitorias;
  private $derrotas;
  private $empates;

  // Metódo constutor
  public function __construct($nome, $nacionalidade, $idade, $altura, $pe, $vitorias, $derrotas, $empates)
  {
    $this -> setNome($nome);
    $this -> setNacionalidade($nacionalidade);
    $this -> setIdade($idade);
    $this -> setAltura($altura);
    $this -> setPeso($pe);
    $this -> setVitorias($vitorias);
    $this -> setDerrotas($derrotas);
    $this -> setEmpates($empates);
  }

  //Getter e Setter [Metódos especiais]

  private function getNome(): string
  {
    return $this -> nome;
  }

  private function getNacionalidade(): string
  {
    return $this -> nacionalidade;
  }

  private function getIdade(): int
  {
    return $this -> idade;
  }

  private function getAltura(): float
  {
    return $this -> altura;
  }

  private function getPeso(): float
  {
    return $this -> peso;
  }

  private function getCategoria(): string
  {
    return $this -> categoria;
  }

  private function getVitorias(): int
  {
    return $this -> vitorias;
  }

  private function getDerrotas(): int
  {
    return $this -> derrotas;
  }

  private function getEmpates(): int
  {
    return $this -> empates;
  }

  private function setNome($nome): void
  {
    $this -> nome = $nome;
  }

  private function setNacionalidade($nacionalidade): void
  {
    $this -> nacionalidade = $nacionalidade;
  }

  private function setIdade($idade): void
  {
    $this -> idade = $idade;
  }

  private function setAltura($altura): void
  {
    $this -> altura = $altura;
  }

  private function setPeso($pe): void
  {
    $this -> peso = $pe;
    $this -> setCategoria();
  }

  private function setCategoria(): void
  {

    if ($this -> peso < 52.2)
      $this -> categoria = "Invalido";

    elseif ($this -> peso <= 70.3)
      $this -> categoria = "Leve";

    elseif ($this -> peso <= 83.9)
      $this -> categoria = "Médio";

    elseif ($this -> peso <= 120.2)
      $this -> categoria = "Pesado";

    else
      $this -> categoria = "Invalido";
  }

  private function setVitorias($vit): void
  {
    $this -> vitorias = $this -> getVitorias() + $vit;
  }

  private function setDerrotas($der): void
  {
    $this -> derrotas = $this -> getDerrotas() + $der;
  }

  private function setEmpates($emp): void
  {
    $this -> empates = $this -> getEmpates() + $emp;
  }

  //Metódos
  public function apresentar(): void
  {
    echo "<br />O lutador " . $this -> getNome() . " é do(a) " . $this -> getNacionalidade() . " tem " . $this -> getIdade() . " de idade, altura de " . $this -> getAltura() . "m, pesa " . $this -> getPeso() . "kg lutando pela categoria " . $this -> getCategoria();
  }

  public function status(): void
  {
    echo "<br />O Lutador " . $this -> getNome() . " tem " . $this -> getVitorias() . " Vitorias, " . $this -> getDerrotas() . " Derrotas e " . $this -> getEmpates() . " Empates.";
  }

  public function ganharLuta(): void
  {
    $this -> setVitorias($this -> getVitorias() + 1);
    echo "<br />O lutador " . $this -> getNome() . " ganhou uma luta e agora possui " . $this -> getVitorias() . " vitorias.";
  }

  public function perderLuta(): void
  {
    $this -> setDerrotas($this -> getDerrotas() + 1);
    echo "<br />O lutador " . $this -> getNome() . " perdeu uma luta e agora possui " . $this -> getDerrotas() . " derrotas.";
  }

  public function empatarLuta(): void
  {
    $this -> setEmpates($this -> getEmpates() + 1);
    echo "<br />O lutador " . $this -> getNome() . " empatou uma luta e agora possui " . $this -> getEmpates() . " empates.";
  }

}
