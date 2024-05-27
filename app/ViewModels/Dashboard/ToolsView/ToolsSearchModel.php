<?php

namespace App\ViewModels\Dashboard\ToolsView;

use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tools\Tools;
use Spatie\ViewModels\ViewModel;

class ToolsSearchModel extends ViewModel {
    public $tools;
    public $orders;
    public $type;
    public function __construct($request)
    {

        if (auth()->user()->role == 2) {
            $this->tools = Tools::where([
                ['user_id', auth()->user()->id],
                ['type', $request->type]])
                ->where(function ($query) use ($request) {
                    $query->where('order_id', $request->order_id)->orWhere('st_date', $request->exam_date)->orWhere('fin_date', $request->fin_date);
                })
                ->paginate(20);
        } else {
            $this->tools = Tools::where('type', $request->type)
                ->where(function ($query) use ($request) {
                    $query->where('order_id', $request->order_id)->orWhere('st_date', $request->exam_date)->orWhere('fin_date', $request->fin_date);
                })
                ->paginate(20);
        }

        $this->orders = Order::get();
        $this->type = $request->type;
    }
}