<?php
//Creer une classe pour les capitales
class Capitale {
    //Creer des variables des pays et capitales
    private $pays;
    private $capitale;

    //Envoyer les information demandes 

    public function __construct($pays, $capitale) {
        $this->setPays($pays);
        $this->setCapitale($capitale);
    }

    //Creer une visibilité

    private function setPays($pays){
        if(is_string) { //Verifier si c'est une chaine de caractère avec la fonction is-string
            $this->pays = $pays;
        }
    }
    private function setCapitale($capitale){
        if(is_string){
            $this->capitale = $capitale;
        }
    }
    // On ajoute des guetteurs 
    public function getPays() {
        return $this->pays; // Cela signifie qu'il nous ramème ce qui contiens les xxx 
    }

    public function getCapitale(){
        return $this->capitale;
    }
    //Visibilité pyvlique avec la fonction __toString()
    public function __toString() {
        $phrase = '<p>La ville de '.$this->getCapitale().' est la capitale du pays '.$this->getPays().'</p>';
        return $phrase;
    }

}