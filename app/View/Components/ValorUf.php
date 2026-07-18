<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ValorUf extends Component
{
    public $uf;

    public function __construct()
    {
        // Simulamos la conexión a la API externa
        $this->uf = 38500;
    }

    public function render()
    {
        return view('components.valor-uf');
    }
}
