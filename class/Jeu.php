<?php

class Jeu
{

    public $personnages = ["Magicien", "Barbare", "Paladin"];

    public $playerPersonnage;

    public function listePersonnage()
    {
        $html = "";
        for ($i = 0; $i < 3; $i++) {

                $html = $html . "<a href='test.php?id=" . $i . "'>" . $this->personnages[$i] . "</a>" ;


        }
        return $html;
    }

    public function choixPersonnage($choix)
    {
        $this->playerPersonnage = $choix;
    }
}