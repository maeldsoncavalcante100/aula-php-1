<?php

class car {

    // Atributos
    public $marca = "";
    public $modelo = "";
    public $cor = "";
    public $placa = "";
    
    // Método ligar
    function ligar() {
        echo "O carro está ligado\n ";
    }
    
    // Método desligar
    function desligar() {
        echo "O carro está desligado\n ";
    }
    
    // Método acelerar
    function acelerar() {
        echo "O carro acelera\n ";
    }
}
/*
$car1 = new Car();
$car2 = new Car();

$car1->marca = "Tesla\n";
$car1->modelo = "Roadster\n";
$car1->cor = "Vermelho\n";
$car1->placa = "MARTE01\n";

$car2->marca = "Volkswagen\n";
$car2->modelo = "Fusca\n";
$car2->cor = "Azul\n";
$car2->placa = "HERBIES3\n";

echo $car1->marca;  // Saída: Tesla
echo $car2->marca; // Saída: Volkswagen

$car1->desligar();
$car2->acelerar();
*/

class Pessoa {
    public $nome = "";
    public $idade = "";
    // Método construir 
    /*
    function __construct() {
        echo 'Um objeto foi criado <br />';
    }
    */

    function perfil() {
        echo 'Eu sou' . $this->nome . '<br />';
        echo 'Eu tenho' . $this->idade . 'anos de idade.<br />';

    }
}


$p1 = new Pessoa();
$p1->nome = 'Maria';
$p1->idade = 22;
$p1->perfil();
$p2 = new Pessoa();
