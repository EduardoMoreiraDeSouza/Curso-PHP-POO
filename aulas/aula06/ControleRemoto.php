<?php

require_once "./Controlador.php";

class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;


    public function __construct() {
        
        $this -> setVolume(50);
        $this -> setLigado(false);
        $this -> setTocando(false);

    }

    public function ligar() {
        $this -> setLigado(true);
    }

    public function desligar() {
        $this -> setLigado(false);
    }

    public function abrirMenu() {
    
        print "Está ligado? ".$this -> getLigado()."<br/>";
        print "Está tocando? ". $this -> getTocando()."<br/>";
        print "Volume: ". $this -> getVolume()."<br/>";

        for ($i = 10; $i <= $this -> getVolume(); $i += 10) { print "|"; }
        print "<br/>";

    }

    public function fecharMenu() { print "<br/>Fechando o Menu!"; }

    public function maisVolume() {

        if ($this -> getLigado()) {
            $this -> setVolume($this -> getVolume() + 5);
        }

    }

    public function menosVolume() {

        if ($this -> getLigado()) {
            $this -> setVolume($this -> getVolume() - 5);
        }

    }

    public function ligarMudo() {

        if ($this -> getLigado()) {
            $this -> setVolume(0);
        }

    }

    public function desligarMudo() {

        if ($this -> getVolume() == 0) {
            $this -> setVolume(50);
        }

    }

    public function play() {

        if ($this -> getLigado() and !$this -> getTocando()) {
            $this -> setTocando(true);
        }

    }

    public function pause() {

        if ($this -> getLigado() and $this -> getTocando()) {
            $this -> setTocando(false);
        }

    }


    private function getVolume()
    {
        return $this -> volume;
    }
    private function setVolume($volume)
    {
        $this -> volume = $volume;

        return $this;
    }


    private function getLigado()
    {
        return $this -> ligado;
    }

    private function setLigado($ligado)
    {
        $this -> ligado = $ligado;

        return $this;
    }


    private function getTocando()
    {
        return $this -> tocando;
    }

    private function setTocando($tocando)
    {
        $this -> tocando = $tocando;

        return $this;
    }

}

?>