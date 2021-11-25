<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'jaiminho';
        $idade = 49;
        $array = ['ronaldinho', 'ronaldo', 'arnaldo', 'cesar', 'coelho'];
    
        return view('welcome', [
            'nome'=>$nome,
            'idade'=>$idade,
            'profissao'=>'vagabundo profissional',
            'array'=>$array]);
    }

    public function create()
    {
        return view('events.create');
    }
}
