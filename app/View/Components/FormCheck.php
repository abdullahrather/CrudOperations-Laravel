<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormCheck extends Component
{
    public $label;
    public $name;
    public $id;
    public $value;
    public $ischecked;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $id, $value, $ischecked, $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->ischecked = $ischecked;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-check');
    }
}
