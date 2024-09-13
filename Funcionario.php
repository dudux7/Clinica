<?php 
    require_once "Humano.php";
    class Funcionario extends Humano {
        public $Funcionario;
        public $SalarioBase;
        public function Falar(){
            $this->SalarioBase = 1200;
            echo "eu sou um Funcionario \n";
            echo "O salario base é: " . $this->SalarioBase . "\n";
        }

    }
        