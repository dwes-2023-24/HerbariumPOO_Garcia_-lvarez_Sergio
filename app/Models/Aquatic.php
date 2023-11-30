<?php

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