<?php

namespace App\ViewModels\Website\clientView;

use Spatie\ViewModels\ViewModel;

class ReportsViewModel extends ViewModel
{
    public $data;
    public $type;
    public function __construct($type = null)
    {
        $reportType = $type . 's';
        $this->type = $type;
        $this->data = collect();
        $orders = auth()->guard('client')->user()->orders()->with($reportType)->get();
        foreach ($orders as $order) {
            $this->data = $this->data->merge($order->$reportType);
        }
    }
    public function company()
    {
        return auth()->guard('client')->user();
    }
    public function orders()
    {
        return auth()->guard('client')->user()->orders;
    }
}
