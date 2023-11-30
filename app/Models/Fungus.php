<?php

namespace App\Models;

class Fungus extends Organism{

    private $num_fungus = 0;

    public function __construct($name, $discovery_date){
        parent::__construct($name, $discovery_date);
        self::$num_fungus++;
    }


    function getCategory(){
         return "Fungus";
    }

    public static function updatePopulation($amount) {
        self::$num_fungus += $amount;
        parent::$population += $amount;

        if (self::$num_fungus < 0) {
            self::$num_fungus = 0;
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