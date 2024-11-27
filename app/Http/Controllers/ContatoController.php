<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function Contato(Request $request){
        dump($request);
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
