<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormComponent extends Component
{
    public $class;
    public $label;
    public $for;
    public $type;
    public $name;
    public $id;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $label, $for, $type, $name, $id, $value)
    {
        $this->class = $class;
        $this->label = $label;
        $this->for = $for;
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-component');
    }
}
