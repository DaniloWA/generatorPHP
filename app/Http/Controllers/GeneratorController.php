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

        if ($quant > 20) {
            return redirect()->route('frontend.index', ['result' => 'A quantidade não pode passar de 100']);
        }

       if ($option === 'soma') {
            $result = (new Soma())->get($quant);
        }

       if ($option === 'senha') {
            $result = (new Senha())->get($quant);
        }

       if ($option === 'nif') {
            $result = (new Nif())->get($quant);
        }

       if ($option === 'mult') {
            $result = (new Tabuada())->get($quant);
        }




       return redirect()->route('frontend.index', ['result' => $result]);
    }
}
