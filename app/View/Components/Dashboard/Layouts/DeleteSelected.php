<?php

namespace App\View\Components\Dashboard\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteSelected extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $route = null, public $model = null)
    {
        $this->route = $route ?? abort(404);
        $this->model = $model->first() ? get_class($model->first()) : redirect()->back();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.layouts.delete-selected');
    }
}
