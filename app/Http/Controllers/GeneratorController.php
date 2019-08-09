<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    public function show(Request $request)
    {

        $result = null;
        if ($request->result != null) {
            $result = $request->result;
        }

        return view('welcome', [
            'result' => $result,
        ]);
    }

    public function store(Request $request)
    {
       $quant = $request->quant;
       $option = $request->opts;
       $result = "";

       if ($option === 'soma') {
            if ($quant > 20) {
                return redirect()->route('frontend.index', ['result' => 'A quantidade não pode passar de 100']);
            }
            for ($i=1; $i <= $quant ; $i++) {
                $num1 = rand(1, 10);
                $num2 = rand(1, 10);
                $soma = $num1 + $num2;
                $result .= "A soma do valor " . $num1 . " mais o numero " . $num2 . " é igual a " . $soma . "<br>";
            }
        }



       return redirect()->route('frontend.index', ['result' => $result]);
    }
}
