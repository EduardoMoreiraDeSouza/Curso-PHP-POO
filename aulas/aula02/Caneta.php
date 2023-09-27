<?php
class Caneta
{
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  public function rabiscar()
  {

    if ($this -> tampada) {

      print "<p>Erro! Não posso rabiscar.</p>";
    } else {

      print "<p>Estou Rabiscando...</p>";
    }
  }

  public function tampar(): void
  {
    $this -> tampada = true;
  }
  
  public function destampar(): void
  {
    $this -> tampada = false;
  }
}
