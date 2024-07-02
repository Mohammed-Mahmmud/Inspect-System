<?php

namespace App\View\Components\Website\Reports\Vertical\Layouts;

use App\Models\Report\ReportSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public $header;
    public function __construct()
    {
        $this->header = ReportSettings::pluck('value', 'key')->toArray();
        $this->image = ReportSettings::where('key', 'headerImage')->get()->first()->getFirstMediaPath('headerImage');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.reports.vertical.layouts.header');
    }
}
