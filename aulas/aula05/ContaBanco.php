<?php

class ContaBanco {

    public $numConta;
    
    protected $tipo;

    private $dono;
    private $saldo;
    private $status;

    public function __construct() {

        $this -> saldo = 0;
        $this -> status = false;

    }

    public function abrirConta($tipo) {

        $this -> setTipo($tipo);
        $this -> setStatus(true);

        if ($tipo == 'cc')
            $this -> setSaldo(50);
        elseif ($tipo == 'cp')
            $this -> setSaldo(150);

    }

    public function fecharConta() {

        if ($this -> saldo > 0) 
            print "Ops! Sua conta está com dinheiro!";
        elseif ($this -> saldo < 0)
            print "Ops! Você está em débito conosco!";
        else
            $this -> setStatus(false);

    }

    public function depositar($valor) {

        if ($this -> getStatus() == true)
            $this -> setSaldo($this -> getSaldo() + $valor);
        else
            print "Você precisa abrir uma conta para depositar!";

    }

    public function sacar($valor) {

        if ($this -> getStatus() == true)
            if ($this -> getSaldo() > 0)
                $this -> setSaldo($this -> getSaldo() + $valor);
            else
            print "Você precisa ter um saldo positivo na conta para sacar!";    
        else
            print "Você precisa abrir uma conta para sacar!";

    }

    public function pagarMensalidade() {

        if ($this -> saldo < 0)
            print "Ops! Você não tem saldo suficiente para pagar a mensalidade!";
        
        if ($this -> tipo == 'cc')
            $valor = 12;
        elseif ($this -> tipo == 'cp')
            $valor = 20;
        
        if ($this -> getStatus() == true)
            $this -> setSaldo($this -> getSaldo() - $valor);
        else
            print "Você não tem uma conta conosco para pagar a mensalidade!";

    }

    public function getNumConta() {
        return $this -> numConta;
    }
    public function setNumConta($numeroConta) {
        $this -> numConta = $numeroConta;
    }


    public function getTipo() {
        return $this -> tipo;
    }
    public function setTipo($tipo) {
        $this -> tipo = $tipo;
    }


    public function getDono() {
        return $this -> dono;
    }
    public function setDono($dono) {
        $this -> dono = $dono;
    }


    public function getSaldo() {
        return $this -> saldo;
    }
    public function setSaldo($valor) {
        $this -> saldo = $valor;
    }


    public function getStatus() {
        return $this -> status;
    }
    public function setStatus($status) {
        $this -> status = $status;
    }

}

?>