<?php

class Million  {

    public function calculateMillion($number) {
        if($number{0}==0){
            return "";
        }elseif($number{0}==1){
            return "мільйон";
        }elseif($number{0}>1 && $number{0}<5){
            return "мільйони";
        }else{
            return "мільйонів";
        }
    }

    public function calculateNatural($number){
        $strategy = new Natural();
        return $strategy->show($number{0});
    }

    public function calculateHundredThousand($number){
        $strategy = new HundredThousand();
        return  $strategy->show(substr($number, 1));
    }

    public function show($number) {
        return $this->calculateNatural($number)." "
        .$this->calculateMillion($number)." "
        .$this->calculateHundredThousand($number);
    }
}