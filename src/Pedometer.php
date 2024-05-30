<?php
// src/Pedometer.php

//echo 'test';

class Pedometer {
    private $date; 
    private $steps; 

    public function __construct($date) {
      
        $this->date = $date; 
        $this->steps = 0;
    }

    public function incrementSteps() {
      
        $this->steps++; // Erhöhen des Schrittzählers um 1
    }

    public function __toString() {
        return "Am " . $this->date . " bin ich " . $this->steps . " Schritte gegangen."; 
    }
}
?>
