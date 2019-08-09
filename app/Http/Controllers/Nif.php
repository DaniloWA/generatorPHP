<?php

namespace App\Http\Controllers;

use Dotenv\Regex\Result;

class Nif
{
    public function get($quant)
    {
        $result = null;
        for ($i = 1; $i <= $quant; $i++) {
            $nif = rand(100, 199) . '.' . rand(760, 800) . '.' . rand(320, 723);
            $result .= 'Sua nif é ' . $nif . '<br>';
         }
        return $result;
    }
}
