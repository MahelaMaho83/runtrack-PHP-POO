<?php
class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;
    private $disponible = true;

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

    // Vérification de la disponibilité
    public function verification() {
        return $this->disponible;
    }

    // Emprunter un livre
    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
        } else {
            echo "Le livre n'est pas disponible pour emprunt.<br>";
        }
    }

    // Rendre un livre
    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
        } else {
            echo "Le livre est déjà disponible.<br>";
        }
    }
}

// Création d'un livre
$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);

// Affichage des valeurs initiales
echo "Titre : " . $livre->getTitre() . "<br>";
echo "Auteur : " . $livre->getAuteur() . "<br>";
echo "Nombre de pages : " . $livre->getNombrePages() . "<br>";

echo "Disponibilité : " . ($livre->verification() ? "Disponible" : "Indisponible") . "<br>";

// Emprunter le livre
$livre->emprunter();
echo "Après emprunt, disponibilité : " . ($livre->verification() ? "Disponible" : "Indisponible") . "<br>";

// Rendre le livre
$livre->rendre();
echo "Après retour, disponibilité : " . ($livre->verification() ? "Disponible" : "Indisponible") . "<br>";
?>
