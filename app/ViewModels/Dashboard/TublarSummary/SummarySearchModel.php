<?php

namespace App\ViewModels\Dashboard\TublarSummary;

use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\TublarSummary\TublarSummary;
use Spatie\ViewModels\ViewModel;

class SummarySearchModel extends ViewModel {
    public $summary;
    public $orders;
    public $type;
    public function __construct($request)
    {
    
        if (auth()->user()->role == 2) {
            $this->summary = TublarSummary::where([
                ['user_id', auth()->user()->id],
                ['type', $request->type]])
                ->where(function ($query) use ($request) {
                    $query->where('order_id', $request->order_id)->orWhere('st_date', $request->exam_date)->orWhere('fin_date', $request->fin_date);
                })
                ->paginate(20);
        } else {
            $this->summary = TublarSummary::where('type', $request->type)
                ->where(function ($query) use ($request) {
                    $query->where('order_id', $request->order_id)->orWhere('st_date', $request->exam_date)->orWhere('fin_date', $request->fin_date);
                })
                ->paginate(20);
        }

        $this->orders = Order::get();
        $this->type = $request->type;
    }
}