<?php
        class Land
        {
            //maak de variables aan
            private $land = "";
            private $hoofdstad = "";
            private $antwoord = "";
    
            //doet ze in een construct
            function __construct($land, $hoofdstad, $antwoord){
                $this->land = $land;
                $this->hoofdstad = $hoofdstad;
                $this->antwoord = $antwoord;
            }   
    
            function getHoofdstad(){
                return $this->hoofdstad;
            }
    
            function getLand(){
                return $this->land;
            }

            function getAntwoord(){
                return $this->antwoord;
            }
    
            function setAntwoord($antwoord){
                $this->antwoord = $antwoord;
            }
        }
    ?>