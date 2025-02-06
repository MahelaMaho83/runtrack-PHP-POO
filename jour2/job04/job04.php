<?php
class Student {
    private $nom;
    private $prenom;
    private $numEtudiant;
    private $credits = 0;
    private $level;

    // Constructeur
    public function __construct($nom, $prenom, $numEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->level = $this->studentEval();
    }

    // Ajouter des crédits
    public function add_credits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval();
        } else {
            echo "Erreur : Le nombre de crédits doit être positif.<br>";
        }
    }

    // Méthode privée pour évaluer le niveau de l'étudiant
    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    // Afficher les informations de l'étudiant
    public function studentInfo() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prénom : " . $this->prenom . "<br>";
        echo "Numéro d'étudiant : " . $this->numEtudiant . "<br>";
        echo "Niveau : " . $this->level . "<br>";
    }
}

// Instanciation de l'étudiant John Doe
$etudiant = new Student("Doe", "John", 145);

// Ajout de crédits
$etudiant->add_credits(10);
$etudiant->add_credits(20);
$etudiant->add_credits(30);

// Affichage des informations
$etudiant->studentInfo();
?>
