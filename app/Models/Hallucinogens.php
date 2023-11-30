<?php

class Hallucinogens extends Fungus{

    public function __construct($name, $discovery_date){
        parent::__construct($name, $discovery_date);

        function getCategory(){
            return ("Hallucinogens");
        }
        
    }
    
}