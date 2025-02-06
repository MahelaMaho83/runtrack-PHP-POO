<?php
class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;

    // Constructeur
    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages); // Utilisation du setter pour validation
    }

    // Getter pour le titre
    public function getTitre() {
        return $this->titre;
    }

    // Setter pour le titre
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    // Getter pour l'auteur
    public function getAuteur() {
        return $this->auteur;
    }

    // Setter pour l'auteur
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    // Getter pour le nombre de pages
    public function getNombrePages() {
        return $this->nombrePages;
    }

    // Setter pour le nombre de pages avec validation
    public function setNombrePages($nombrePages) {
        if (is_int($nombrePages) && $nombrePages > 0) {
            $this->nombrePages = $nombrePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
        }
    }
}

// Création d'un livre
$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);

// Affichage des valeurs initiales
echo "Titre : " . $livre->getTitre() . "<br>";
echo "Auteur : " . $livre->getAuteur() . "<br>";
echo "Nombre de pages : " . $livre->getNombrePages() . "<br>";

// Modification des valeurs
$livre->setTitre("1984");
$livre->setAuteur("George Orwell");
$livre->setNombrePages(328);

// Tentative d'affectation d'une valeur invalide
$livre->setNombrePages(-10);
$livre->setNombrePages("cent");

// Vérification des modifications
echo "Nouveau Titre : " . $livre->getTitre() . "<br>";
echo "Nouvel Auteur : " . $livre->getAuteur() . "<br>";
echo "Nouveau Nombre de pages : " . $livre->getNombrePages() . "<br>";
?>