<?php
class Personnage {
    private $x;
    private $y;
    private $plateau;
    
    public function __construct($x, $y, $largeur, $hauteur) {
        $this->x = $x;
        $this->y = $y;
        $this->plateau = array_fill(0, $hauteur, array_fill(0, $largeur, 0));
    }
    
    public function gauche() {
        if ($this->x > 0) {
            $this->x--;
        }
    }
    
    public function droite() {
        if ($this->x < count($this->plateau[0]) - 1) {
            $this->x++;
        }
    }
    
    public function haut() {
        if ($this->y > 0) {
            $this->y--;
        }
    }
    
    public function bas() {
        if ($this->y < count($this->plateau) - 1) {
            $this->y++;
        }
    }
    
    public function position() {
        return ["x" => $this->x, "y" => $this->y];
    }
}

// Exemple d'utilisation
$perso = new Personnage(2, 2, 5, 5);
$perso->gauche();
$perso->haut();
print_r($perso->position());
?>
