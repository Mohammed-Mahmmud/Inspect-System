<?php

namespace App\View\Components\Website\Reports\Horizontal\Layouts;

use App\Models\Report\ReportSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $address;
    public $phone1;
    public $phone2;
    public $email1;
    public $email2;
    public $fax;
    public $website;
    public $crn;
    public $image;
    public function __construct()
    {
        $this->title = ReportSettings::where('key', 'title')->first()->value ?? null;
        $this->address = ReportSettings::where('key', 'address')->first()->value ?? null;
        $this->phone1 = ReportSettings::where('key', 'phone1')->first()->value ?? null;
        $this->phone2 = ReportSettings::where('key', 'phone2')->first()->value ?? null;
        $this->image = ReportSettings::where('key', 'headerImage')->get()->first()->getFirstMediaPath('headerImage');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.reports.horizontal.layouts.header',
        ['title'=>$this->title,
        'address'=>$this->address,'phone1'=>$this->phone1,'phone2'=>$this->phone2,

        ]
    );
    }
}
