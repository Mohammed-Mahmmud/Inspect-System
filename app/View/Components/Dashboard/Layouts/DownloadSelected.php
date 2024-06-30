<?php

namespace App\View\Components\Dashboard\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DownloadSelected extends Component
{
    /**
     * Create a new component instance.
     */
    public $route, $model, $pdfView;
    public function __construct($route = null, $pdfView = null, $model = null)
    {
        $this->pdfView = $pdfView;
        $this->route = $route ?? abort(404);
        $this->model = $model->first() ? get_class($model->first()) : redirect()->back();
        // $this->model = $model->first() ? $model->first()->getTable() : redirect()->back();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.layouts.download-selected');
    }
}
