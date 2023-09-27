<?php
require_once 'Aluno.php';
class Bolsista extends Aluno
{
  private $bolsa;

  public function renovarBolsa(): void
  {
    echo "Bolsa Renovada";
  }
  public function pagarMensalidade(): void
  {
    echo "<p>" . $this -> getNome() . " é Bolsista! Então paga com desconto!</p>";
  }
  public function getBolsa(): string
  {
    return $this -> bolsa;
  }
  public function setBolsa($bolsa): void
  {
    $this -> bolsa = $bolsa;
  }
}
