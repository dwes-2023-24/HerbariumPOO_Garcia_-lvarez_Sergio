<?php

use App\Models\Organism;

class Plant extends Organism{

    private $num_plants=0;
    

    public function __construct($name, $discovery_date){
        parent::__construct($name, $discovery_date);    
    }

    function getCategory(){
        return "Plant";
    }

    public static function updatePopulation($amount) {
        self::$num_plants += $amount;
        parent::$population += $amount;

        if (self::$num_plants < 0) {
            self::$num_plants = 0;
        }
        if (parent::$population < 0) {
            parent::$population = 0;
        }
    }

    /* Getters y Setters */

    public function getNum_plants(){
        return $this -> num_plants;
    }

    public function setNum_plants($amount){
        self::$num_plants += $amount;
    }
} 
