<?php

namespace App\Models;

abstract class Organism {

    protected $name;
    protected $discovery_date;
    protected static $population=0;
    
    public function __construct($name = "", $discovery_date = ""){
        $this -> name = $name;
        $this -> discovery_date = $discovery_date;
    } 
   
    abstract public function getCategory();    


 /*    public static function updatePopulation($amount) {
        self::$population += $amount;
        if (self::$population < 0) {
            self::$population = 0;
        }
    }
 */
    abstract public static function updatePopulation($amount);

}


