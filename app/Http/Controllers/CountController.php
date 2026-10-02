<?php

namespace App\Http\Controllers;

class CountController extends Controller{
    public function tambah($a, $b)
    {
        return $a + $b;
    }
    public function kurang($a, $b)
    {
        return $a - $b;
    }
    public function kali($a, $b)
    {
        return $a * $b;
    }
    public function bagi($a, $b)
    {
        return $a / $b;
    }

    public function hasil($operator, $a, $b)
    {
        switch ($operator) {
            case 'tambah':
                return $this->tambah($a, $b);
            case 'kurang':
                return $this->kurang($a, $b);
            case 'kali':
                return $this->kali($a, $b);
            case 'bagi':
                return $this->bagi($a, $b);
            default:
                return "Operator tidak valid";
        }
    }
}
