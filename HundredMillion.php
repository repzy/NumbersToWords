<?php

class HundredMillion  {
    private  $number;
    public function __constuct($number) {
        $this->number =  $number;
    }

    public function calculateTenMillion($number) {
        $strategy = new TenMillion();
        return $strategy->show(substr($number, 1));
    }

    public function calculateHundred($number){
        $strategy = new Hundred();
        return  $strategy->show(substr($number, 0, 3));
    }



    public function show($number) {
        return $this->calculateHundred($number)." "
        .$this->calculateTenMillion($number);
    }
}