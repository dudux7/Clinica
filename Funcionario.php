<?php 
    require_once "Humano.php";
    class Funcionario extends Humano {
        public $Funcionario;
        public $SalarioBase = 1500;
        public $SalarioFinal = 0;
        public function Salario() {
            echo "O salario base é: " . $this->SalarioFinal. "\n";
        }
        public function Falar(){
            echo "eu sou um Funcionario \n";
          
        }

    }
        