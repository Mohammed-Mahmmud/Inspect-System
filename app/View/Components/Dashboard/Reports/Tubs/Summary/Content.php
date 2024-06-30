<?php

namespace App\View\Components\Dashboard\Reports\Tubs\Summary;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Content extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $data;
    public $examType;
    public $orders;
    public $accept;
    public function __construct($type, $examType, $data, $orders, $accept)
    {
        $this->type = $type;
        $this->examType = $examType;
        $this->orders = $orders;
        $this->data = $data;
        $this->accept = $accept;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.reports.tubs.summary.content');
    }
}
