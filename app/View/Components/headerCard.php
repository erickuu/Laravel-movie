<?php

namespace App\View\Components;

use Illuminate\View\Component;

class headerCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $movies;
    public function __construct($movies)
    {
        $this->movies = $movies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $randint = rand(1,9);
        return view('components.header-card',['randint'=>$randint]);
    }
}
