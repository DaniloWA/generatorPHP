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
            $result = (new Soma())->get($quant);
        }



       return redirect()->route('frontend.index', ['result' => $result]);
    }
}
