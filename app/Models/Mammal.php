<?php

class Mammal extends Animal implements Canivarora{

    use Swimmer;

    function getCategory(){
        return "Mammal";
    }
    
    public function huntPrey(){

    }
    public function feedMeat(){
        
    }
}