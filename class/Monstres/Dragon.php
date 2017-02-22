<?php

class Dragon extends Monstre  {

    public function __construct($niveau)
    {
        parent::__construct("Dragon", $niveau, 20, 20, 1);
    }
}