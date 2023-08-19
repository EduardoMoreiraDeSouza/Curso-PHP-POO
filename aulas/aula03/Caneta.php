<?php

class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {

        if ($this -> tampada == true) {

            print "<p>Não Posso rabiscar!</p>";

        } else {

            print '<p>Estou rabiscando...<br></p>';

        }

    }

    public function tampar() {

        $this -> tampada = true;
        
    }

    public function destampar() {

        $this -> tampada = false;
        
    }
    
}
