<?php

namespace App\View\Components\Website\Company;

use App\Models\Dashboard\Order;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $client = auth()->guard('client')->user();
        $orders = Order::where('company_id', $client->id)->get();
        foreach ($orders as $order) {
            // dd($order->mpis);
        }

        // dd(!empty($orders->tubs->toArray()));
        // dd($orders->tubs->toArray());
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.company.sidebar');
    }
}
