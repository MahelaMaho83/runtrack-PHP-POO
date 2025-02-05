<?php

class Operation {
    private $nombre1;
    private $nombre2;

    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function afficherAttributs() {
        echo "Nombre1 : " . $this->nombre1 . "\n";
        echo "Nombre2 : " . $this->nombre2 . "\n";
    }

    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Résultat de l'addition : " . $resultat . "\n";
    }
}

// Instanciation de la classe avec les valeurs par défaut
$operation1 = new Operation();
$operation1->afficherAttributs();
$operation1->addition();

// Instanciation avec des valeurs personnalisées
$operation2 = new Operation(5, 10);
$operation2->afficherAttributs();
$operation2->addition();

?>
