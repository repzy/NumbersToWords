<?php
class TenThousand  {

    public function calculateThousands($number) {
        if($number{0}==0){
            return "";
        }elseif($number{1}==1){
            return "тисяча";
        }elseif(substr($number, 0, 2)<20){
            return "тисяч";
        }elseif($number{1}>1 && $number{1}<5){
            return "тисячі";
        }else{
            return "тисяч";
        }
    }

    public function calculateNatural($number){
        if($number{1}==1){
            return "одна";
        }elseif($number{1}==2){
            return "дві";
        }else{
            $strategy = new Natural();
            return $strategy->show($number{1});
        }
    }

    public function calculateHundred($number){
        $strategy = new Hundred();
        return  $strategy->show(substr($number, 2));
    }

    public function calculateTens($number){
        $strategy = new Tens();
        if(substr($number, 0, 2) % 10 == 0 || substr($number, 0, 2)<=20){
            return $strategy->calculateTens(substr($number, 0, 2));
        }else{
            $tens = $strategy->calculateTens($number{0}."0");
            $natural = $this->calculateNatural($number);
            return $tens." ".$natural;
        }
    }

    public function show($number) {
        return $this->calculateTens($number)." "
            .$this->calculateThousands($number)." "
            .$this->calculateHundred($number);
    }
}