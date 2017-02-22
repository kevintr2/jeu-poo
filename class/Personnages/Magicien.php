<?php

class Magicien extends Personnage
{
    public function __construct($name)
    {
        parent::__construct($name, "Magicien", 50, 0, 100, 50, 25, "Baguette magique");

    }

}