<?php

require_once "./Aluno.php";

class Bolsista extends Aluno {

    private $bolsa;

    public function pagarMensalidade() {

        print "Pagando a mensalidade com desconto!";

    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}

?>