<?php

namespace App\Http\Controllers;

use Dotenv\Regex\Result;

class Sequencia
{
    public function get($quant)
    {
        $result = null;
        for ($i = 1; $i <= $quant; $i++) {
            $num = rand(1,99);
            $num_text = '';
            for ($y=$num; $y <= ($num + 10) ; $y++) {
                $num_text .= $y . '-';
            }
            $result .= 'A sequencia é ' . $num_text . '<br>';
         }
        return $result;
    }
}
