<?php

class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {

        if ($this -> tampada == true) {

            print "<p>Não Posso rabiscar!</p>";

        } else {

            print '<p>Estou rabiscando...<br></p>';

        }

    }

    function tampar() {

        $this -> tampada = true;
        
    }

    function destampar() {

        $this -> tampada = false;

        
    }
    
}
