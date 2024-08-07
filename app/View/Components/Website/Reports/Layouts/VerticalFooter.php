<?php

namespace App\View\Components\Website\Reports\Layouts;

use App\Models\Report\ReportSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VerticalFooter extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public function __construct()
    {
        $this->image = ReportSettings::where('key', 'footerImage')->first()->getFirstMediaPath('footerImage') ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.reports.layouts.vertical-footer');
    }
}
