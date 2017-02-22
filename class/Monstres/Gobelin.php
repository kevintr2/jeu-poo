<?php

class Gobelin extends Monstre {

    public function __construct($niveau)
    {
        parent::__construct("Gobelin", $niveau, 5, 5, 10);
    }
}