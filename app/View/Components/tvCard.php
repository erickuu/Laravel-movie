<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tvCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tvs;
    public function __construct($tvs)
    {
        $this->tvs = $tvs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tv-card');
    }
}
