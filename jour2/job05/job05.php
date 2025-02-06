<?php
class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche = false;
    private $reservoir = 50;

    // Constructeur
    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
    }

    // Getters
    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function getKilometrage() {
        return $this->kilometrage;
    }

    public function getEnMarche() {
        return $this->en_marche;
    }

    public function getReservoir() {
        return $this->reservoir;
    }

    // Setters
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function setReservoir($reservoir) {
        $this->reservoir = $reservoir;
    }

    // Méthode privée pour vérifier le niveau du réservoir
    private function verifier_plein() {
        return $this->reservoir;
    }

    // Méthode pour démarrer la voiture
    public function demarrer() {
        if ($this->verifier_plein() > 5) {
            $this->en_marche = true;
        } else {
            echo "Impossible de démarrer : niveau de carburant insuffisant.<br>";
        }
    }

    // Méthode pour arrêter la voiture
    public function arreter() {
        $this->en_marche = false;
    }
}

// Instanciation d'une voiture
$voiture = new Voiture("Toyota", "Corolla", 2020, 30000);

echo "Marque : " . $voiture->getMarque() . "<br>";
echo "Modèle : " . $voiture->getModele() . "<br>";
echo "Année : " . $voiture->getAnnee() . "<br>";
echo "Kilométrage : " . $voiture->getKilometrage() . " km<br>";
echo "Réservoir : " . $voiture->getReservoir() . " L<br>";

echo "Tentative de démarrage...<br>";
$voiture->demarrer();
echo "En marche : " . ($voiture->getEnMarche() ? "Oui" : "Non") . "<br>";

$voiture->arreter();
echo "Après arrêt, en marche : " . ($voiture->getEnMarche() ? "Oui" : "Non") . "<br>";
?>
