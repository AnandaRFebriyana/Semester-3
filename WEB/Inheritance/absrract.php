<?php

abstract class car {
    protected $tankVolume;

    public function setTankVolume($volume){
        $this -> tankVolume = $volume;
    }

    abstract public function calcNumMilesOnFullTank();
}