<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function teste() {
        $dados = ['nome'=>'joão', 'idade'=>15];

        return view('teste', ['dados'=>$dados]);
    }
}
