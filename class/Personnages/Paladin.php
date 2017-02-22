<?php

class Paladin extends Personnage
{
    public function __construct($name)
    {
        parent::__construct($name, "Paladin", 75, 25, 50, 50, 20, "Epée magique");

    }

}
