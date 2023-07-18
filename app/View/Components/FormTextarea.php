<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormTextarea extends Component
{
    public $class;
    public $label;
    public $for;
    public $name;
    public $id;
    public $rows;
    public $selectedvalue;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $label, $for, $rows, $name, $id, $selectedvalue = null)
    {
        $this->class = $class;
        $this->label = $label;
        $this->for = $for;
        $this->rows = $rows;
        $this->name = $name;
        $this->id = $id;
        $this->selectedvalue = $selectedvalue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-textarea');
    }
}
