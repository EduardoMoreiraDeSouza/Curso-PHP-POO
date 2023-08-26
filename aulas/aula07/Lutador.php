<?php

class Lutador {

    // Atributos

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    // Construtor

    public function __construct(
        $nome,
        $nacionalidade,
        $idade,
        $altura,
        $peso,
        $vitorias,
        $derrotas,
        $empates
    ) {

        $this -> setNome($nome);
        $this -> setNacionalidade($nacionalidade);
        $this -> setIdade($idade);
        $this -> setAltura($altura);
        $this -> setPeso($peso);
        $this -> setVitorias($vitorias);
        $this -> setDerrotas($derrotas);
        $this -> setEmpates($empates);

    }

    // Métodos Especiais

    public function apresentar() {

        $nome = $this -> getNome();
        $nacionalidade = $this -> getNacionalidade();
        $idade = $this -> getIdade();
        $altura = $this -> getAltura();
        $peso = $this -> getPeso();
        $vitorias = $this -> getVitorias();
        $derrotas = $this -> getDerrotas();
        $empates = $this -> getEmpates();

        print "Lutador:  $nome<br/>";
        print "Origem: $nacionalidade<br/>";
        print "$idade anos<br/>";
        print "$altura m de altura<br/>";
        print "Pesando $peso Kg<br/>";
        print "Ganhou: $vitorias<br/>";
        print "Perdeu: $derrotas<br/>";
        print "Empatou: $empates<br/><br/>";

    }

    public function status() {

        $nome = $this -> getNome();
        $categoria = $this -> getCategoria();
        $vitorias = $this -> getVitorias();
        $derrotas = $this -> getDerrotas();
        $empates = $this -> getEmpates();

        print "<br/>$nome<br/>";
        print "é um peso $categoria<br/>";
        print "$vitorias, vitórias<br/>";
        print "$derrotas, derrotas<br/>";
        print "$empates, empates<br/><br/>";

    }

    public function ganharLuta() {
        $this -> setVitorias($this -> getVitorias() + 1);
    }

    public function perderLuta() {
        $this -> setDerrotas($this -> getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this -> setEmpates($this -> getEmpates() + 1);
    }

    // Métodos Comuns

    public function getNome() {
        return $this -> nome;
    }
    
    public function setNome($nome) { $this -> nome = $nome; }


    public function getNacionalidade() {
        return $this -> nacionalidade;
    }
    
    public function setNacionalidade($nacionalidade) { $this -> nacionalidade = $nacionalidade; }


    public function getIdade() {
        return $this -> idade;
    }
    
    public function setIdade($idade) { $this -> idade = $idade; }


    public function getAltura() {
        return $this -> altura;
    }
    
    public function setAltura($altura) { $this -> altura = $altura; }


    public function getPeso() {
        return $this -> peso;
    }
    
    public function setPeso($peso) {
        $this -> peso = $peso;
        $this -> setCategoria();
    }


    public function getCategoria() {
        return $this -> categoria;
    }
    
    public function setCategoria() {
        $peso = $this -> peso;
        
        if ($peso < 52.2) $categoria = "Inválido";
        
        elseif ($peso <= 70.3) $categoria = "Leve";

        elseif ($peso <= 83.9) $categoria = "Médio";
        
        elseif ($peso <= 120.2) $categoria = "Pesado";
        
        else $categoria = "Inválido";

        $this -> categoria = $categoria;

    }


    public function getVitorias() {
        return $this -> vitorias;
    }
    
    public function setVitorias($vitorias) {
        $this -> vitorias = $vitorias;
    }


    public function getDerrotas() {
        return $this -> derrotas;
    }
    
    public function setDerrotas($derrotas) {
        $this -> derrotas = $derrotas;
    }


    public function getEmpates() {
        return $this -> empates;
    }
    
    public function setEmpates($empates) {
        $this -> empates = $empates;
    }

}

?>