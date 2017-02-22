<?php

class Personnage {

    public $name;
    public $classe;
    public $vie;
    public $degats;
    public $magie;
    public $defense;
    public $vitesse;
    public $arme;
    public $bourseOr;

    public function __construct($name, $classe, $vie, $degats, $magie, $defense, $vitesse, $arme, $bourseOr = 200)
    {
        $this->name = $name;
        $this->classe = $classe;
        $this->vie = $vie;
        $this->degats = $degats;
        $this->magie = $magie;
        $this->defense = $defense;
        $this->vitesse = $vitesse;
        $this->arme = $arme;
    }

}

