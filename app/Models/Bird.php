<?php

namespace App\Models;
use App\Interfaces\Canivarora;
use App\traits\Flyer;

class Bird extends Animal implements Canivarora{

    use Flyer;

    public function __construct($name, $discovey_date){
        parent::__construct($name, $discovey_date);
    }

    function getCategory(){
        return "Bird";
    }

    public function huntPrey(){

    }
    public function feedMeat(){
        
    }
    
}