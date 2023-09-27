<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo
{
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;

  public function __construct($titulo)
  {
    $this -> titulo = $titulo;
    $this -> avaliacao = 1;
    $this -> views = 0;
    $this -> curtidas = 0;
    $this -> reproduzindo = false;
  }

  public function play(): void
  {
    $this -> reproduzindo = true;
  }
  public function pause(): void
  {
    $this -> reproduzindo = false;
  }

  public function like(): void
  {
    $this -> curtidas++;
  }

  public function getTitulo(): string
  {
    return $this -> titulo;
  }

  public function getAvaliacao(): int
  {
    return $this -> avaliacao;
  }

  public function getViews(): int
  {
    return $this -> views;
  }

  public function getCurtidas(): int
  {
    return $this -> curtidas;
  }

  public function getReproduzindo(): bool
  {
    return $this -> reproduzindo;
  }

  public function setTitulo($titulo): void
  {
    $this -> titulo = $titulo;
  }

  public function setAvaliacao($avaliacao): void
  {
    $media = ($this -> avaliacao + $avaliacao) / $this -> views;
    $this -> avaliacao = $media;
  }

  public function setViews($views): void
  {
    $this -> views = $views;
  }

  public function setCurtidas($curtidas): void
  {
    $this -> curtidas = $curtidas;
  }

  public function setReproduzindo($reproduzindo): void
  {
    $this -> reproduzindo = $reproduzindo;
 
  }
}
