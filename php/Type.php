<?php

    class Type{
        
        private $tCat;

        function __construct($tCat){
            $this->tCat = $tCat;
            
        }

        function get_tCat(){
            return $this->tCat;
        }
    }