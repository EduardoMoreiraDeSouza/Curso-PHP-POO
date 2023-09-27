<?php
require_once 'Lobo.php';
class Cachorro extends Lobo
{

  public function emitirSom(): void
  {
    echo "Au! Au! Au!";
  }

  public function reagirFrase($frase): void
  {
    if ($frase == "toma comida" || $frase == "Olá")
      echo "<br />Abanar e Latir ";
    else
      echo "<br />Rosnar ";
      
  }

  public function reagirHora($hora): void
  {
    if ($hora < 12)
      echo "<br />Abanar ";
    elseif ($hora >= 18)
      echo "<br />Ignorar ";
    else
      echo "<br />Abanar e Latir ";
    
  }

  public function reagirDono($dono): void
  {
    if ($dono == true)
      echo "<br />Abanar ";
    else
      echo "<br />Rosnar e latir ";

  }

  public function reagirIdadePeso($idade, $peso): void
  {
    if ($idade < 5) {

      if ($peso < 10)
        echo "<br />Abanar";
      else
        echo "<br />Latir";
          
    } else {
      if ($peso < 10)
        echo "<br />Rosnar";
      else
        echo "<br />Ignorar";
      
    }

  }

}
