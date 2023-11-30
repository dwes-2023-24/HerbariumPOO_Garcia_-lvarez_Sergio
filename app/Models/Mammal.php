<?php

class Mammal extends Animal implements Canivarora{

    use Swimmer;

    public function __construct($name, $discovery_date){
        parent::__construct($name, $discovery_date);
        
    }

    function getCategory(){
        return "Mammal";
    }
    
    public function huntPrey(){

    }
    public function feedMeat(){
        
    }
}