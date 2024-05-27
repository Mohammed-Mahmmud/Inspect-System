<?php

namespace App\View\Components\Dashboard\Reports;

use App\Models\Dashboard\Tublar\Tubs\Tubs;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Magnetizing extends Component
{
    /**
     * Create a new component instance.
     */
    public $magnetizing;
    public function __construct(public $var)
    {
        $this->magnetizing = Tubs::MAGNETIZING;
        // dd($methods);
        $this->var = $var;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.reports.magnetizing');
    }
}
