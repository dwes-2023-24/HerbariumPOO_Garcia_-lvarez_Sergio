<?php

use App\Models\Organism;

class Animal extends Organism{

    private $num_animals=0;
    

    public function __construct($name, $discovery_date){
        parent::__construct($name, $discovery_date);
        self::$num_animals++;
        
    }

    function getCategory(){
        return "Animal";
    }

    public static function updatePopulation($amount) {
        self::$num_animals += $amount;
        parent::$population += $amount;

        if (self::$num_animals < 0) {
            self::$num_animals = 0;
        }
        if (parent::$population < 0) {
            parent::$population = 0;
        }
    }

     /* Métodos mágicos */

     public function __get($atributo){
        return $this -> $atributo;
    }
    
    public function __set($atributo, $valor){
        $this -> $atributo = $valor;
    }

}