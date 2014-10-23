<?php

class HundredMillion  {
    private  $number;
    public function __constuct($number) {
        $this->number =  $number;
    }

    public function calculateMillion($number) {
        $strategy = new Million();
        return $strategy->show(substr($number, 2));
    }

    public function calculateHundred($number){
        $strategy = new Hundred();
        return  $strategy->show(substr($number, 0, 3));
    }

    public function show($number) {
        return $this->calculateHundred($number)." "
        .$this->calculateMillion($number);
    }
}