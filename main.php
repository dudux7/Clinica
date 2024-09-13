<?php
    require_once "Animal.php";
    require_once "Humano.php";
    require_once "Cachorro.php";
    require_once "Gato.php";
    require_once "Ave.php";
    require_once "Cliente.php";
    require_once "Balconista.php";
    require_once "Funcionario.php";
    require_once "Vendedor.php";
    require_once "Veterinario.php";
    
//Humanos
        $Cliente1 = new Cliente ("João", 19, "Rua Memphis Ronaldo de Garro Guedes, 2012", "94 91010-1237");
        $Cliente2 = new Cliente ("Dudu", 19, "Rua Memphis Ronaldo de Garro Guedes, 2012", "94 91010-1237");
        $Cliente3 = new Cliente ("Dindin", 19, "Rua Memphis Ronaldo de Garro Guedes, 2012", "94 91010-1237");
        
//Animais
        $Cachorro = new Cachorro ("Bolt", "Pitbull", "4", "preto", 10, 1.0, $Cliente1);
        $Gato = new Gato ("Garfield", "Gato Perça", "4", "laranja", 17, 0.7, $Cliente2);
        $Ave = new Ave ("Loro", "Papagaio", "2", "verde e amarelo", 0.9, 0.2, $Cliente3);

        
        echo "\n";
        $Cachorro->Falar();
        $Cachorro->Apresentar();
        echo "\n";
        $Gato->Falar();
        $Gato->Apresentar();
        echo "\n";
        $Ave->Falar();
        $Ave->Apresentar();
        echo "\n";
        
//Funcionarios
        $Carlos = new Balconista ("Carlos", 30,"Rua dos Trabalhadores","00800921");
        $Carlos->Falar();


?>