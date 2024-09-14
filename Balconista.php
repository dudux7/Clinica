<?php 
    require_once "Humano.php";
    require_once "Funcionario.php";

    class Balconista extends Funcionario {
        public $Acrescimo = 400;
        public function Salario() {
            $this->SalarioFinal = $this->SalarioBase + $this->Acrescimo;
            echo "O salario base é: " . $this->SalarioFinal . "\n";
        }
        
    }