<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $class;
    public $label;
    public $for;
    public $name;
    public $id;
    public $option;
    public $options;
    public $selectedvalue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $label, $for, $name, $id, $option, $options, $selectedvalue = null)
    {
        $this->class = $class;
        $this->label = $label;
        $this->for = $for;
        $this->name = $name;
        $this->id = $id;
        $this->option = $option;
        $this->options = $options;
        $this->selectedvalue = $selectedvalue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-select');
    }
}
