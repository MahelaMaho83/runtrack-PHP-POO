<?php
class Commande {
    private $numCommande;
    private $plats = [];
    private $statut = "en cours";
    private const TVA = 0.2;

    // Constructeur
    public function __construct($numCommande) {
        $this->numCommande = $numCommande;
    }

    // Ajouter un plat à la commande
    public function ajouterPlat($nomPlat, $prix) {
        $this->plats[$nomPlat] = $prix;
    }

    // Annuler la commande
    public function annulerCommande() {
        $this->statut = "annulée";
        $this->plats = [];
    }

    // Méthode privée pour calculer le total
    private function calculerTotal() {
        return array_sum($this->plats);
    }

    // Méthode pour calculer la TVA
    public function calculerTVA() {
        return $this->calculerTotal() * self::TVA;
    }

    // Afficher les détails de la commande
    public function afficherCommande() {
        echo "Numéro de commande : " . $this->numCommande . "<br>";
        echo "Statut : " . $this->statut . "<br>";
        echo "Plats commandés :<br>";
        foreach ($this->plats as $plat => $prix) {
            echo "- $plat : $prix €<br>";
        }
        echo "Total à payer : " . $this->calculerTotal() . " €<br>";
        echo "TVA : " . $this->calculerTVA() . " €<br>";
    }
}

// Instanciation d'une commande
$commande = new Commande(101);
$commande->ajouterPlat("Pizza", 12.5);
$commande->ajouterPlat("Pâtes", 10);
$commande->ajouterPlat("Salade", 7.5);

// Affichage de la commande
$commande->afficherCommande();
?>
