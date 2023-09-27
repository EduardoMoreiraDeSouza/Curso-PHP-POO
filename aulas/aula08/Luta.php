<?php
require_once 'Lutador.php';
class Luta
{
  #Atributos
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  #Métodos Especiais , GETTER E SETTER
  private function getDesafiado(): string
  {
    return $this -> desafiado;
  }

  private function getDesafiante(): string
  {
    return $this -> desafiante;
  }

  private function getRounds(): int
  {
    return $this -> rounds;
  }

  private function getAprovada(): bool
  {
    return $this -> aprovada;
  }

  private function setDesafiado($desafiado): void
  {
    $this -> desafiado = $desafiado;
  }

  private function setDesafiante($desafiante): void
  {
    $this -> desafiante = $desafiante;
  }

  private function setRounds($rounds): void
  {
    $this -> rounds = $rounds;
  }

  private function setAprovada($aprovada): void
  {
    $this -> aprovada = $aprovada;
  }

  #Metódos padrões
  public function marcarLuta($lutador1, $lutador2): void
  {

    if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {

      $this -> aprovada = true;
      $this -> desafiado = $lutador1;
      $this -> desafiante = $lutador2;
    } else {

      $this -> aprovada = false;
      $this -> desafiado = null;
      $this -> desafiante = null;
    }
  }

  public function lutar(): void
  {

    if ($this -> aprovada === true) {

      $this -> desafiado->apresentar();
      $this -> desafiante->apresentar();
      $checkvit = rand(0, 2);

      switch ($checkvit) {

        case 0: //Empate
          echo "<br />Empatou";
          $this -> desafiado->empatarLuta();
          $this -> desafiante->empatarLuta();
          break;

        case 1: //Ganhou desafiado
          echo "<br />" . $this -> desafiado->getNome() . " Desafiado Ganhou";
          $this -> desafiado->ganharLuta();
          $this -> desafiante->perderLuta();
          break;

        case 2: //Ganhou desafiante
          echo "<br />" . $this -> desafiante->getNome() . " Desafiante Venceu";
          $this -> desafiado->perderLuta();
          $this -> desafiante->ganharLuta();
          break;

        default:
          break;
      }

    }
    else
      echo "A luta não pode acontecer";

  }
}
