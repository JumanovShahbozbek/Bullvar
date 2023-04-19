<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headr extends Component
{
    /**
     * Create a new component instance.
     */

    public $name1;
    public $name2;

    public function __construct($name1, $name2)
    {
        $this -> name1 = $name1;
        $this -> name2 = $name2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.headr');
    }
}
