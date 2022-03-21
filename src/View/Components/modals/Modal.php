<?php

namespace Ryangurn\Componently\View\Components\modals;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('Componently::components.modals.modal');
    }
}
