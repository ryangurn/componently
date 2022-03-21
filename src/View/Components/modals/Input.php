<?php

namespace Ryangurn\Componently\View\Components\modals;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * @var string
     *
     * the value to be used for the text input
     * placeholder value.
     */
    public string $placeholder;

    /**
     * @var string
     *
     * the value to be used as the type for
     * the input.
     */
    public string $type;

    /**
     * @param string $type
     * @param string $placeholder
     * the component constructor
     */
    public function __construct(string $type = 'text', string $placeholder = '')
    {
        $this->placeholder = $placeholder;
        $this->type = $type;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('Componently::components.modals.input');
    }
}
