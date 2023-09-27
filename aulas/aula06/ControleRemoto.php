<?php
/*
 Classe para o modelo do controle remoto
 */

require_once 'Controlador.php';

class ControleRemoto  implements Controlador
{

  private $volume;
  private $ligado;
  private $tocando;

  public function __construct()
  {
    $this -> volume = 50;
    $this -> ligado = false;
    $this -> tocando = false;
  }

  private function getVolume(): int
  {
    return $this -> volume;
  }

  private function getLigado(): bool
  {
    return $this -> ligado;
  }

  private function getTocando(): bool
  {
    return $this -> tocando;
  }

  private function setVolume($volume): void
  {
    $this -> volume = $volume;
  }

  private function setLigado($ligado): void
  {
    $this -> ligado = $ligado;
  }

  private function setTocando($tocando): void
  {
    $this -> tocando = $tocando;
  }
  
  public function ligar(): void
  {
    $this -> setLigado(true);
  }

  public function desligar(): void
  {
    $this -> setLigado(false);
  }

  public function abrirMenu(): void
  {

    echo "<br />Está ligado? " . ($this -> getLigado() ? "SIM" : "NÃO");
    echo "<br />Está tocando? " . ($this -> getTocando() ? "SIM" : "NÃO");
    echo "<br />Volume: " . $this -> getVolume() . " ";

    for ($i = 0; $i <= $this -> getVolume(); $i += 10) {
      echo "|";
    }

    echo "<br />";
  }

  public function fecharMenu(): void
  {
    echo "<br /> Fechando menu...";
  }

  public function maisVolume(): void
  {

    if ($this -> getLigado())
      $this -> setVolume($this -> getVolume() + 10);
    else
      echo "Erro não posso aumentar o volume";
  }
  
  public function menosVolume(): void
  {
    if ($this -> getLigado())
      $this -> setVolume($this -> getVolume() - 10);
    else
      echo "Erro não posso diminuir o volume";
  }

  public function ligarMudo(): void
  {
    if ($this -> getLigado() && $this -> getVolume() > 0)
      $this -> setVolume(0);
  }

  public function desligarMudo(): void
  {
    if ($this -> getLigado() && $this -> getVolume() == 0) {
      $this -> setVolume(50);
    }
  }

  public function play(): void
  {
    if ($this -> getLigado() && !($this -> getTocando()))
      $this -> setTocando(true);
  }

  public function pause(): void
  {
    if ($this -> getLigado() && $this -> getTocando())
      $this -> setTocando(false);
  }
  
}
