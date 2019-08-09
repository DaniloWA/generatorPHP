<?php

namespace App\Http\Controllers;

use Dotenv\Regex\Result;

class Tabuada
{
    public function get($quant)
    {
        $result = null;
        for ($i = 1; $i <= $quant; $i++) {
            $num1 = rand(1, 10);
            $num2 = rand(1, 10);
            $mult = $num1 * $num2;
            $result .= "A multiplicação do valor " . $num1 . " vezes o numero " . $num2 . " é igual a " . $mult . "<br>";
         }
        return $result;
    }
}
