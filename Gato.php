<?php 
    require_once "Animal.php";
    require_once "Cliente.php";
    require_once "Humano.php";
    
    class Gato extends Animal {
        public function Falar(){
            echo "Gato: Miau" . "\n";
        }
    
    }