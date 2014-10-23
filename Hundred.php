<?php

class Hundred {

    public function calculateHundred($number) {
        switch ($number) {
            case 000:
                return "";
                break;
            case 100:
                return "сто";
                break;
            case 200:
                return "двісті";
                break;
            case 300:
                return "триста";
                break;
            case 400:
                return "чотириста";
                break;
            case 500:
                return "пятсот";
                break;
            case 600:
                return "шістсот";
                break;
            case 700:
                return "сімсот";
                break;
            case 800:
                return "вісімсот";
                break;
            case 900:
                return "девятсот";
                break;
        }
    }

    public function calculateTens($number){
        $strategy = new Tens();
        return  $strategy->show($number);
    }

    public function show($number) {
        if($number % 100 == 0){
            return $this->calculateHundred($number);
        }else{
            $hundreds = $this->calculateHundred($number{0}."00");
            $tens = $this->calculateTens(substr($number, 1));
            return $hundreds." ".$tens;
        }
    }
}