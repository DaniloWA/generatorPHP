<?php

namespace App\Http\Controllers;

use Dotenv\Regex\Result;

class Soma
{
    public function get($quant)
    {
        $result = '';
            for ($i = 1; $i <= $quant; $i++) {
                $num1 = rand(1, 10);
                $num2 = rand(1, 10);
                $soma = $num1 + $num2;
                $result .= "A soma do valor " . $num1 . " mais o numero " . $num2 . " é igual a " . $soma . "<br>";
            }
        return $result;
    }
}
