<?php

class Produit {
    private $nom;
    private $prixHT;
    private $TVA;

    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    public function calculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    public function afficher() {
        return "Nom: " . $this->nom . ", Prix HT: " . $this->prixHT . "€, TVA: " . $this->TVA . "%, Prix TTC: " . $this->calculerPrixTTC() . "€";
    }

    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    public function setPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrixHT() {
        return $this->prixHT;
    }

    public function getTVA() {
        return $this->TVA;
    }
}

// Création de plusieurs produits
$produit1 = new Produit("Ordinateur", 800, 20);
$produit2 = new Produit("Smartphone", 500, 20);
$produit3 = new Produit("Tablette", 300, 10);

// Affichage des produits initiaux
echo $produit1->afficher() . "\n";
echo $produit2->afficher() . "\n";
echo $produit3->afficher() . "\n";

// Modification des noms et prix des produits
$produit1->setNom("PC Portable");
$produit1->setPrixHT(900);
$produit2->setNom("iPhone");
$produit2->setPrixHT(600);
$produit3->setNom("iPad");
$produit3->setPrixHT(350);

// Affichage après modification
echo "\nAprès modification :\n";
echo $produit1->afficher() . "\n";
echo $produit2->afficher() . "\n";
echo $produit3->afficher() . "\n";

?>
