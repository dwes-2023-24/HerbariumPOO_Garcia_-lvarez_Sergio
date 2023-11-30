<?php

class Arboreal extends Plant implements Herbivore{

    use Climber;

    function getCategory(){
        return "Arboreal";
    }

    public function searchVegetables(){

    }
    public function feedPlants(){

    }



}