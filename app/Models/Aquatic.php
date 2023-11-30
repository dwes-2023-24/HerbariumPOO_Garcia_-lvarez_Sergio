<?php

namespace App\Models;
use App\Interfaces\Herbivore;
use App\traits\Swimmer;

class Aquatic extends Plant implements Herbivore{

    use Swimmer;

    public function __construct($name, $discoery_date){
        parent::__construct($name, $discoery_date);    
    }


    function getCategory(){
        return "Aquatic";
    }

    public function searchVegetables(){

    }
    public function feedPlants(){

    }
}