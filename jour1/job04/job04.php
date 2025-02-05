<?php

class Point {
    private $x;
    private $y;

    // Constructeur
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Afficher les coordonnées du point
    public function afficherLesPoints() {
        echo "Coordonnées du point: (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Afficher la coordonnée X
    public function afficherX() {
        echo "Valeur de X: " . $this->x . "<br>";
    }

    // Afficher la coordonnée Y
    public function afficherY() {
        echo "Valeur de Y: " . $this->y . "<br>";
    }

    // Changer la valeur de X
    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    // Changer la valeur de Y
    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Exemple d'utilisation
$point = new Point(5, 10);
$point->afficherLesPoints();
$point->afficherX();
$point->afficherY();

$point->changerX(15);
$point->changerY(20);
$point->afficherLesPoints();

?>