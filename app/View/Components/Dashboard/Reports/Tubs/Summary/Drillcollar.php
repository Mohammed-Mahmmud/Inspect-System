<?php

namespace App\View\Components\Dashboard\Reports\Tubs\Summary;

use App\Models\Dashboard\Tublar\Tubs\Summary;
use App\Models\Dashboard\Tublar\Tubs\Tubs;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Drillcollar extends Component
{
    /**
     * Create a new component instance.
     */
    public $count;
    public function __construct(public Summary $data)
    {
        $this->data = $data;
        $this->count = $this->data->getDesc()->count() > 0 ? $this->data->getDesc()->count() : 10;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.reports.tubs.summary.drillcollar');
    }
}
