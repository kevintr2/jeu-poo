<?php

use Salle;

class Niveau {

    public $niveau;
    public $salle;
    public $coffres;
    public $monstres;
    public $heros;
    public $portes;

    public function __construct($niveau)
    {
        $this->niveau = $niveau;
    }

    public function genererSalle() {
        $this->salle = new Salle();
    }
}