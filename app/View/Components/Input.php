<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    private string $type;
    private string $label;
    private string $placeholder;
    private string $field;
    private string $value;


    public function __construct(string $label,string $placeholder,string $field ,string $type="text", string $value=""){
        $this->type=$type;
        $this->label=$label;
        $this->placeholder=$placeholder;
        $this->field=$field;
        $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.input', [
            "type" => $this->type,
            "label" => $this->label,
            "placeholder" => $this->placeholder,
            "field" => $this->field,
            "value" => $this->value
        ]);
    }
}
