<?php

class Thousand  {

    public function calculateThousands($number) {
        if($number{0}==0){
            return "";
        }elseif($number{0}==1){
            return "тисяча";
        }elseif($number{0}>1 && $number{0}<5){
            return "тисячі";
        }else{
            return "тисяч";
        }
    }

    public function calculateNatural($number){
        if($number{0}==0){
            return "";
        }elseif($number{0}==1){
            return "одна";
        }elseif($number{0}==2){
            return "дві";
        }else {
            $strategy = new Natural();
            return $strategy->show($number{0});
        }
    }

    public function calculateHundred($number){
        $strategy = new Hundred();
        return  $strategy->show(substr($number, 1));
    }

    public function show($number) {
        return $this->calculateNatural($number)." "
            .$this->calculateThousands($number)." "
            .$this->calculateHundred($number);
    }
}