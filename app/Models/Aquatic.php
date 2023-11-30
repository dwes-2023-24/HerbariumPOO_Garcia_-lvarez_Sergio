<?php

class Aquatic extends Plant implements Herbivore{

    use Swimmer;


    function getCategory(){
        return "Aquatic";
    }

    public function searchVegetables(){

    }
    public function feedPlants(){

    }
}