<?php

class Monstre
{

    public $name;
    public $niveau;
    public $defense;
    public $attaque;
    public $vitesse;

    public function __construct($name, $niveau, $defense, $attaque, $vitesse)
    {
        $this->name = $name;
        $this->niveau = $niveau;
        $this->defense = $defense * $this->niveau;
        $this->attaque = $attaque * $this->niveau;
        $this->vitesse = $vitesse * $this->niveau;
    }

}