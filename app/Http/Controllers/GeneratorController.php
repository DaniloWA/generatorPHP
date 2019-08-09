<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
       $quant = $request->quant;
       $option = $request->opts;

       $num1 = rand(1,10);
       $num2 = rand(1,10);
       $soma = $num1 + $num2;
       dd("A soma do valor ".$num1." mais o numero ".$num2." é igual a ".$soma);

    }
}
