<?php

namespace App\Http\Controllers;

use Dotenv\Regex\Result;

class Senha
{
    public function get($quant)
    {
        $result = null;
        for ($i = 1; $i <= $quant; $i++) {
            $senha = rand(1, 100) . rand(200, 500);
            $result .= 'Sua senha é ' . $senha . '<br>';
         }
        return $result;
    }
}
