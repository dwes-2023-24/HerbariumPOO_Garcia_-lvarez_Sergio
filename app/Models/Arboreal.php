<?php

namespace App\Models;
use App\Interfaces\Herbivore;
use App\traits\Climber;

class Arboreal extends Plant implements Herbivore{

    use Climber;

    public function __construct($name, $discovery_date){
        parent::__construct($name, $discovery_date);
    }


    function getCategory(){
        return "Arboreal";
    }

    public function searchVegetables(){

    }
    public function feedPlants(){

    }



}