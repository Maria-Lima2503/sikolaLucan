<?php

namespace App\View\Components\pages\componentes;

use Illuminate\View\Component;

class botoes_cadastro extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.pages.componentes.botoes_cadastro');
    }
}
