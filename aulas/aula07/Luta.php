<?php

require_once "./Lutador.php";

Class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($lutador1, $lutador2) {

        if (
            $lutador1 -> getCategoria() === $lutador2 -> getCategoria() and
            $lutador1 != $lutador2
        ) {

            $this -> setAprovada(true);
            $this -> setDesafiado($lutador1);
            $this -> setDesafiante($lutador2);

        } else {

            $this -> setAprovada(false);
            $this -> setDesafiado(null);
            $this -> setDesafiante(null);
            print "A luta  não pode acontecer!!";

        }

    }

    public function Lutar() {

        if ($this -> getAprovada()) {

            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();

            $vencedor = random_int(0, 2);

            switch ($vencedor) {
                case 0:
                    $this -> desafiado -> empatarLuta();
                    $this -> desafiante -> empatarLuta();
                    print "A luta empatou!<br/>";
                    break;
                case 1:
                    $this -> desafiado -> ganharLuta();
                    $this -> desafiante -> perderLuta();
                    print "O desafiante Venceu!<br/>";
                    break;
                case 2:
                    $this -> desafiado -> perderLuta();
                    $this -> desafiante -> ganharLuta();
                    print "O desafiado Venceu!<br/>";
                    break;
                default:
                    print "ERRO!";
                    break;
            }

        } else 
            print "A luta não pode acontecer";

    }


    public function getDesafiado() {
        return $this -> desafiado;
    }

    public function setDesafiado($desafiado) {
        $this -> desafiado = $desafiado;
    }



    public function getDesafiante() {
        return $this -> desafiante;
    }

    public function setDesafiante($desafiante) {
        $this -> desafiante = $desafiante;
    }



    public function getRounds() {
        return $this -> rounds;
    }

    public function setRounds($rounds) {
        $this -> rounds = $rounds;
    }



    public function getAprovada() {
        return $this -> aprovada;
    }

    public function setAprovada($aprovada) {
        $this -> aprovada = $aprovada;
    }

}

?>