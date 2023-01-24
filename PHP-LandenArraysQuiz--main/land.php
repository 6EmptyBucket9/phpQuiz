<?php
class Land
    {
        private $land = "";
        private $hoofdstad = "";
        private $quizantwoord = "";

        function __construct($land, $hoofdstad, $quizantwoord){
            $this->land = $land;
            $this->hoofdstad = $hoofdstad;
            $this->quizantwoord = $quizantwoord;
        }   

        function getHoofdstad(){
            return $this->hoofdstad;
        }

        function getLand(){
            return $this->land;
        }

        function setQuizantwoord($antwoord){
            $this->quizantwoord = $antwoord;
        }
    }

    ?>