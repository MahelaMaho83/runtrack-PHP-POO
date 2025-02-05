<?php
class Cercle {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    public function afficherInfos() {
        echo "Cercle de rayon : " . $this->rayon . "<br>";
        echo "Diamètre : " . $this->diametre() . "<br>";
        echo "Circonférence : " . $this->circonference() . "<br>";
        echo "Aire : " . $this->aire() . "<br><br>";
    }

    public function circonference() {
        return 2 * pi() * $this->rayon;
    }

    public function aire() {
        return pi() * pow($this->rayon, 2);
    }

    public function diametre() {
        return 2 * $this->rayon;
    }
}

// Création des cercles
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage des informations des cercles
$cercle1->afficherInfos();
$cercle2->afficherInfos();
?>
