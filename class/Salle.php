<?php

class Salle {

    public $niveau;
    public $nbCoffres;
    public $nbMonstres;

    public function __construct($niveau)
    {
        $this->niveau = $niveau;
    }

    public function genererCoffres() {
        $this->nbCoffres = rand(1,3);
    }

    public function genererMonstres() {
        $this->nbMonstres = 1 * $this->niveau;
    }

}

