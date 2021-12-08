<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Teste extends Component
{
    public $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function render()
    {
        return view('components.teste');
    }
}
