<?php 
    require_once "Animal.php";
    require_once "Cliente.php";

    class Gato extends Animal {
        public function Falar(){
            echo "Gato: Miau" . "\n";
        }
    
    }
    