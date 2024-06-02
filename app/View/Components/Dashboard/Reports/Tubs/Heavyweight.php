<?php

namespace App\View\Components\Dashboard\Reports\Tubs;

use App\Models\Dashboard\Tublar\Tubs\Tubs;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heavyweight extends Component
{
    /**
     * Create a new component instance.
     */
    public $count;
    public function __construct(public Tubs $tubs)
    {
        $this->tubs = $tubs;
        $this->count = $this->tubs->getDesc()->count() > 0 ? $this->tubs->getDesc()->count() : 10;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.reports.tubs.heavyweight');
    }
}
