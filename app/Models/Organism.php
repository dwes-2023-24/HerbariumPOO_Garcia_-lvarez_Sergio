<?php
//TODO: 1.5 Los hijos harán lo que necesiten según sus padres.
//Todas las rutas de importacion.
namespace App\Models;

abstract class Organism {

    protected $name;
    protected $discovery_date;
    protected static $population=0;
    
    public function __construct($name, $discovery_date){
        $this -> name = $name;
        $this -> discovery_date = $discovery_date;
        self::$population++;
    } 
 
    abstract public function getCategory();    
    
    abstract public static function updatePopulation($amount);

}


