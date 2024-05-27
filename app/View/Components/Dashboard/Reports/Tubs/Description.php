<?php

namespace App\View\Components\Dashboard\Reports\Tubs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Description extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public function __construct($examType)
    {
        $this->type = $examType;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.reports.tubs.description');
    }
}