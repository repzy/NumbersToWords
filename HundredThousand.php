<?php
class HundredThousand  {

    public function calculateTenThousands($number) {
        $strategy = new TenThousand();
        return $strategy->show(substr($number, 1));
    }

    public function calculateHundred($number){
        $strategy = new Hundred();
        return  $strategy->show(substr($number, 0, 1)."00");
    }

    public function show($number) {
        return $this->calculateHundred($number)." "
        .$this->calculateTenThousands($number);
    }
}