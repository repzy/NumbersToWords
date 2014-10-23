<?php

class Tens {

    public function calculateTens($number) {
        switch ($number) {
            case 10:
                return "десять";
                break;
            case 11:
                return "одинадцять";
                break;
            case 12:
                return "дванадцять";
                break;
            case 13:
                return "тринадцять";
                break;
            case 14:
                return "чотирнадцять";
                break;
            case 15:
                return "пятнадцять";
                break;
            case 16:
                return "шістнадцять";
                break;
            case 17:
                return "сімнадцять";
                break;
            case 18:
                return "вісімнадцять";
                break;
            case 19:
                return "девятнадцять";
                break;
            case 20:
                return "двадцять";
                break;
            case 30:
                return "тридцять";
                break;
            case 40:
                return "сорок";
                break;
            case 50:
                return "пятьдесят";
                break;
            case 60:
                return "шістдесять";
                break;
            case 70:
                return "сімдесят";
                break;
            case 80:
                return "вісімдесят";
                break;
            case 90:
                return "девяносто";
                break;
        }
    }

    public function calculateNatural($number){
        $strategy = new Natural();
        return  $strategy->show($number);
    }
    
    public function show($number) {
        if($number{0}==0){
            return $this->calculateNatural($number{1});
        }elseif($number % 10 == 0 || $number<=20){
            return $this->calculateTens($number);
        }else{
            $tens = $this->calculateTens($number{0}."0");
            $natural = $this->calculateNatural($number{1});
            return $tens." ".$natural;
        }
    }
}