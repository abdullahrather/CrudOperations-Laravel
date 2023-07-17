<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formselect extends Component
{
    public $class;
    public $label;
    public $for;
    public $name;
    public $id;
    public $option;
    public $value;
    public $foreacharray;
    public $attribute;
    public $option2;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $label, $for, $name, $id, $option, $value,$foreacharray,$attribute,$option2)
    {
        $this->class = $class;
        $this->label = $label;
        $this->for = $for;
        $this->name = $name;
        $this->id = $id;
        $this->option = $option;
        $this->value = $value;
        $this->foreacharray = $foreacharray;
        $this->attribute = $attribute;
        $this->option2 = $option2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formselect');
    }
}
