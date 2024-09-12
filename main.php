<?php
    require_once "Animal.php";
    require_once "Cachorro.php";
    require_once "Gato.php";
    require_once "Ave.php";
//Animais
    $Cachorro = new Cachorro ("Bolt", "Pitbull", "4", "preto", 10, 1.0);
    $Gato = new Gato ("Garfield", "Gato Perça", "4", "laranja", 17, 0.7);
    $Ave = new Ave ("Loro", "Papagaio", "2", "verde e amarelo", 0.9, 0.2);

    $Cachorro->Falar();
    $Gato->Falar();
    $Ave->Falar();

//Humanos
    $Cliente1 = new cliente ("João", 19, "Rua Memphis Ronaldo de Garro Guedes, 2012", "94 91010-1237");

    $Cliente1->AnimalEstimacao();
?>