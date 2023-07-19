<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImgComponent extends Component
{
    public $src;
    public $alttext;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $alttext)
    {
        $this->src = $src;
        $this->alttext = $alttext;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'

 <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
    <img src="{{$src}}" class="img-fluid" alt="{{$alttext}}">
 </div>
blade;
    }
}
