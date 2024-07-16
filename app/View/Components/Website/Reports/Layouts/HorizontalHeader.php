<?php

namespace App\View\Components\Website\Reports\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Report\ReportSettings;


class HorizontalHeader extends Component
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
        return view('components.website.reports.layouts.horizontal-header');
    }
}
