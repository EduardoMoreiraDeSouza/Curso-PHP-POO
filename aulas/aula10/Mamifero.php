<?php 

require_once "./Animal.php";

class Mamifero extends Animal {

    private $corPelo;

    public function locomover(){

        print "Correndo";

    }
    public function alimentar(){

        print "Alimentando";

    }
    public function emitirSom(){

        print "Emitindo som";

    }

}

?>