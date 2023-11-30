<?php

class Bird extends Animal implements Canivarora{

    use Flyer;

    function getCategory(){
        return "Bird";
    }

    public function huntPrey(){

    }
    public function feedMeat(){
        
    }
    
}