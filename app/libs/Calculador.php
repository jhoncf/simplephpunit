<?php

class Calculador {
    
    public function soma($a, $b){
        return $a + $b;
    }

    public function calculaIdade($birthDate){
        $date = new DateTime($bithdayDate);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
}