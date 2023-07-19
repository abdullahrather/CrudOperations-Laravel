<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBar extends Component
{
    public $lilabel;
    public $link;
    public $anchorclass;
    public $iclass;
    public $liclass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lilabel, $link, $anchorclass, $iclass, $liclass)
    {
        $this->link = $link;
        $this->anchorclass = $anchorclass;
        $this->lilabel = $lilabel;
        $this->iclass = $iclass;
        $this->liclass = $liclass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-bar');
    }
}
