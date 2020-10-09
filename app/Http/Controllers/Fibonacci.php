<?php

namespace App\Http\Controllers;

class Fibonacci
{
    public function get($quant, $zero = false)
    {
        if ($quant >= 2) {
            $f = ($zero) ? [0, 1] : [1, 1];
            for ($i = 2; $i < $quant; $i++) {
                $f[$i] = $f[$i - 1] + $f[$i - 2];
            }
            return $f;
        }
        return ($quant == 1) ? [1] : [];
    }
}
