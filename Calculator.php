<?php

include 'Natural.php';
include 'Tens.php';
include 'Hundred.php';
include 'Thousand.php';
include 'TenThousand.php';
include 'HundredThousand.php';
include 'Million.php';
include 'TenMillion.php';
include 'HundredMillion.php';

class Calculator  {

    public function choose($number){
        
        $count = strlen($number);

        switch($count){
            case 0:
                break;
            case 1:
                $strategy = new Natural($number);
                return $strategy->show($number);
                break;
            case 2:
                $strategy = new Tens($number);
                return $strategy->show($number);
                break;
            case 3:
                $strategy = new Hundred($number);
                return $strategy->show($number);
                break;
            case 4:
                $strategy = new Thousand($number);
                return $strategy->show($number);
                break;
            case 5:
                $strategy = new TenThousand($number);
                return $strategy->show($number);
                break;
            case 6:
                $strategy = new HundredThousand($number);
                return $strategy->show($number);
                break;
            case 7:
                $strategy = new Million($number);
                return $strategy->show($number);
                break;
            case 8:
                $strategy = new TenMillion($number);
                return  $strategy->show($number);
                break;
            case 9:
                $strategy = new HundredMillion($number);
                return  $strategy->show($number);
                break;
        }
    }
}