<?php

namespace App\View\Components\Website\Company;

use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\Order;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Reports extends Component
{
    /**
     * Create a new component instance.
     */
    public $reports = [];
    public function __construct(public $company = null)
    {
        // $this->reports = [];
        $orders = Order::where('company_id', $company->id)->get();
        foreach ($orders as $order) {
            dd(Mpi::where('order_id', $order->id)->get()->toArray());
            if (isset($order) && !empty(Mpi::where('order_id', $order->id)->get()->toArray())) {
                $this->reports = array_merge($this->reports, Mpi::where('order_id', $order->id)->get());
                // $this->reports =  Mpi::where('order_id', $order->id)->get();
                dd($this->reports);
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.company.reports');
    }
}
