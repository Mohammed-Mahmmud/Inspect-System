<?php

namespace App\View\Components\Dashboard\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     */
    public $route, $model, $type;
    public function __construct($route = null, $model = null, $type = null)
    {
        $this->model = $model->first() ? get_class($model->first()) : redirect()->back();
        $this->route = $route ?? abort(404);
        $this->type = $type ?? "";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.layouts.search');
    }
}
