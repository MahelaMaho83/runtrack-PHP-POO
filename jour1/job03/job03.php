<?php

class Personne {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        return "Je suis " . $this->prenom . " " . $this->nom . "\n";
    }
}

// Instanciation de plusieurs personnes
$personne1 = new Personne("Doe", "John");
$personne2 = new Personne("Dupond", "Jean");

// Appel de la méthode SePresenter()
echo $personne1->SePresenter();
echo $personne2->SePresenter();

?>
