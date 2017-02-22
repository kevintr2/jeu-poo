<?php

class Magicien extends Monstre {

    public function __construct($niveau)
    {
        parent::__construct("Magicien", $niveau, 10, 10, 5);
    }
}