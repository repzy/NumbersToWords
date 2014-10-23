<?php

class Natural {

    public function show($number) {

        switch ($number) {
            case 0:
                $output = "нуль";
                break;
            case 1:
                return "один";
                break;
            case 2:
                $output = "два";
                break;
            case 3:
                $output = "три";
                break;
            case 4:
                $output = "чотири";
                break;
            case 5:
                $output = "пять";
                break;
            case 6:
                $output = "шість";
                break;
            case 7:
                $output = "сім";
                break;
            case 8:
                $output = "вісім";
                break;
            case 9:
                $output = "девять";
                break;
        }
        return $output;
    }
}