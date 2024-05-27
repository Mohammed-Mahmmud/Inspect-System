<?php

namespace App\View\Components\Dashboard\Reports\Tools;

use App\Models\Dashboard\Tublar\Tools\ToolsExtensions;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Extensions extends Component
{
    public $extensions;
    /**
     * Create a new component instance.
     */
    public $extSelect;
    public $extInput;
    public $name;
    public function __construct($name)
    {

        $this->extensions = ToolsExtensions::get()->toArray();
        $this->name=$name;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.reports.tools.extensions',['extensions'=>$this->extensions,
    'extInput'=>$this->extInput,'extSelect'=>$this->extSelect,'name'=>$this->name,
    ]);
    }
}
