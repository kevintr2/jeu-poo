<?php

class Coffre {
    public $contenu;

    public function soin(){
        $this->contenu = "Soin";
    }

    public function bonusDegats(){
        $this->contenu = "Bonus dégats +20";
    }

    public function bonusMagie(){
        $this->contenu = "Bonus magie +20";
    }

    public function lucille(){
        $this->contenu = "Lucille";
    }

    public function cle(){
        $this->contenu = "Clé";
    }

    public function gainOr() {
        $this->contenu = "Gain d'or +500";
    }

    public function genererContenu(){
        $this->contenu = rand(1,6);
        if($this->contenu == 1){
            $this->soin();
        }elseif($this->contenu == 2){
            $this->bonusDegats();
        }elseif($this->contenu == 3){
            $this->bonusMagie();
        }elseif($this->contenu == 4){
            $this->lucille();
        }elseif($this->contenu == 5){
            $this->cle();
        }elseif ($this->contenu == 6){
            $this->gainOr();
        }

        return $this->contenu;
    }
}