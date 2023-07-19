<?php

namespace App\View\Components;

use Illuminate\View\Component;

class button extends Component
{
    public $buttonclass;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonclass, $title)
    {
        $this->buttonclass = $buttonclass;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
