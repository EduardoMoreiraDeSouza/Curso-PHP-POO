<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  public function __construct($ti, $au, $pag, $lei)
  {
    $this -> titulo = $ti;
    $this -> autor = $au;
    $this -> totPaginas = $pag;
    $this -> pagAtual = 1;
    $this -> aberto = false;
    $this -> leitor = $lei;
  }

  public function getTitulo(): string
  {
    return $this -> titulo;
  }

  public function getAutor(): string
  {
    return $this -> autor;
  }

  public function getTotPaginas(): int
  {
    return $this -> totPaginas;
  }

  public function getPagAtual(): int
  {
    return $this -> pagAtual;
  }

  public function getAberto(): string
  {
    return $this -> aberto;
  }

  public function getLeitor(): string
  {
    return $this -> leitor;
  }

  public function setTitulo($ti): void
  {
    $this -> titulo = $ti;
  }

  public function setAutor($au): void
  {
    $this -> autor = $au;
  }

  public function setTotPaginas($tot): void
  {
    $this -> totPaginas = $tot;
  }

  public function setPagAtual($pa): void
  {
    $this -> pagAtual = $pa;
  }

  public function setAberto($ab): void
  {
    $this -> aberto = $ab;
  }

  public function setLeitor($lei): void
  {
    $this -> leitor = $lei;
  }

  public function detalhes(): void
  {
    echo "Livro: " . $this -> titulo . " escrito por " . $this -> autor;
    echo "<br />Páginas: " . $this -> totPaginas . " Atual: " . $this -> getPagAtual();
    echo "<br />Sendo lido por " . $this -> leitor->getNome();
  }

  public function abrir(): void
  {
    if ($this -> getAberto() == true) {
      echo "Já estou aberto";
    } else {
      $this -> setAberto(true);
    }
  }

  public function fechar(): void
  {
    if ($this -> getAberto() == false) {
      echo "Já estou fechado";
    } else {
      $this -> setAberto(false);
    }
  }

  public function folhear($p): void
  {
    if ($this -> aberto == true && $p <= $this -> getTotPaginas()) {
      $this -> pagAtual = $p;
    } else {
      echo "O livro está fechado ou estou indo para uma página inacessivel";
    }
  }

  public function avancarPag(): void
  {
    if ($this -> aberto == false or $this -> getPagAtual() == $this -> getTotPaginas()) {
      echo "Não posso avançar estou fechado ou no fim do livro";
    } else {
      $this -> setPagAtual($this -> getPagAtual() + 1);
    }
  }

  public function voltarPag(): void
  {
    if ($this -> aberto == false or $this -> getPagAtual() == 1) {
      echo "Não posso voltar estou fechado ou na página inicial";
    } else {
      $this -> setPagAtual($this -> getPagAtual() - 1);
    }
  }
  
}
