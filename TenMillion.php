<?php
class TenMillion  {

    public function calculateMillion($number) {
        if($number{0}==0) {
            return "";
        }else{
            return "мільйонів";
        }
    }

    public function calculateHundredThousand($number){
        $strategy = new HundredThousand();
        return  $strategy->show(substr($number, 2));
    }

    public function calculateTens($number){
        $strategy = new Tens();
        return $strategy->show(substr($number, 0, 2));
    }

    public function show($number) {
        return $this->calculateTens($number)." "
        .$this->calculateMillion($number)." "
        .$this->calculateHundredThousand($number);
    }
}