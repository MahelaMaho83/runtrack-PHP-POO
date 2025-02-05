<?php
class Animal {
    private $age;
    private $prenom;

    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    public function getAge() {
        return $this->age;
    }

    public function vieillir() {
        $this->age += 1;
    }

    public function nommer($nom) {
        $this->prenom = $nom;
    }

    public function getNom() {
        return $this->prenom;
    }
}

// Instanciation de l'objet Animal
$animal = new Animal();

// Affichage de l'âge initial
echo "L'âge de l'animal " . $animal->getAge() . " ans\n";

// Faire vieillir l'animal
$animal->vieillir();

// Affichage de l'âge après vieillissement
echo "L'âge de l'animal " . $animal->getAge() . " ans\n";

// Nommer l'animal
$animal->nommer("Luna");

// Affichage du nom de l'animal
echo "L'animal se nomme " . $animal->getNom() . "\n";

?>