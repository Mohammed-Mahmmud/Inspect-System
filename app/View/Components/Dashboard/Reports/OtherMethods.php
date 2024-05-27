<?php

namespace App\View\Components\Dashboard\Reports;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OtherMethods extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $var)
    {
        $this->var = $var;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.reports.other-methods');
    }
}
