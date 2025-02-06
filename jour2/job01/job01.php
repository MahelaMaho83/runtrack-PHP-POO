<?php
class Rectangle {
    // Attributs privés
    private $longueur;
    private $largeur;

    // Constructeur
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Assesseurs (Getters)
    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateurs (Setters)
    public function setLongueur($longueur) {
        if ($longueur > 0) {
            $this->longueur = $longueur;
        } else {
            echo "La longueur doit être un nombre positif.\n";
        }
    }

    public function setLargeur($largeur) {
        if ($largeur > 0) {
            $this->largeur = $largeur;
        } else {
            echo "La largeur doit être un nombre positif.\n";
        }
    }

    // Méthode pour afficher les dimensions
    public function afficherDimensions() {
        echo "Longueur : " . $this->longueur . " - Largeur : " . $this->largeur . "\n";
    }
}

// Création d'un rectangle avec longueur 10 et largeur 5
$rectangle = new Rectangle(10, 5);
$rectangle->afficherDimensions();

// Modification des valeurs
$rectangle->setLongueur(15);
$rectangle->setLargeur(7);

// Vérification des nouvelles valeurs
$rectangle->afficherDimensions();
?>
