<?php

namespace App\Http\Controllers;

class AdvancedController extends Controller
{
    public function pangkat($a, $b)
    {
        return pow($a, $b); 
    }

    public function akarkuadrat($a)
    {
        return sqrt($a); 
    }

    public function logaritma($a)
    {
        return log($a); 
    }

    public function persentase($a, $b)
    {
        return ($a / $b) * 100; 
    }

    public function faktorial($n)
    {
        return $n <= 1 ? 1 : $n * $this->faktorial($n - 1); 
    }

    public function hasil($operator, $a, $b = null)
    {
        switch ($operator) {
            case 'power':
                return $this->pangkat($a, $b);
            case 'sqrt':
                return $this->akarkuadrat($a);
            case 'log':
                return $this->logaritma($a);
            case 'percent':
                return $this->persentase($a, $b);
            case 'factorial':
                return $this->faktorial($a);
            default:
                return "Operator tidak valid";
        }
    }
}
