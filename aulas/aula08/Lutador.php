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
  public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
  {

    $this -> setNome($nome);
    $this -> setNacionalidade($nacionalidade);
    $this -> setIdade($idade);
    $this -> setAltura($altura);
    $this -> setVitorias($vitorias);
    $this -> setDerrotas($derrotas);
    $this -> setEmpates($empates);
    $this -> setPeso($peso);
  }

  //Getter e Setter [Metódos especiais]

  public function getNome(): string
  {
    return $this -> nome;
  }

  public function getNacionalidade(): string
  {
    return $this -> nacionalidade;
  }

  public function getIdade(): int
  {
    return $this -> idade;
  }

  public function getAltura(): float
  {
    return $this -> altura;
  }

  public function getPeso(): float
  {
    return $this -> peso;
  }

  public function getCategoria(): string
  {
    return $this -> categoria;
  }

  public function getVitorias(): int
  {
    return $this -> vitorias;
  }

  public function getDerrotas(): int
  {
    return $this -> derrotas;
  }

  public function getEmpates()
  {
    return $this -> empates;
  }

  public function setNome($nome): void
  {
    $this -> nome = $nome;
  }

  public function setNacionalidade($nacionalidade): void
  {
    $this -> nacionalidade = $nacionalidade;
  }

  public function setIdade($idade): void
  {
    $this -> idade = $idade;
  }

  public function setAltura($altura): void
  {
    $this -> altura = $altura;
  }

  public function setPeso($pe): void
  {
    $this -> peso = $pe;
    $this -> setCategoria();
  }

  public function setCategoria(): void
  {

    if ($this -> peso < 52.2) {
      $this -> categoria = "Invalido";
    } elseif ($this -> peso <= 70.3) {
      $this -> categoria = "Leve";
    } elseif ($this -> peso <= 83.9) {
      $this -> categoria = "Médio";
    } elseif ($this -> peso <= 120.2) {
      $this -> categoria = "Pesado";
    } else {
      $this -> categoria = "Invalido";
    }
  }

  public function setVitorias($vit): void
  {
    $this -> vitorias = $this -> getVitorias() + $vit;
  }

  public function setDerrotas($der): void
  {
    $this -> derrotas = $this -> getDerrotas() + $der;
  }

  public function setEmpates($emp): void
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
