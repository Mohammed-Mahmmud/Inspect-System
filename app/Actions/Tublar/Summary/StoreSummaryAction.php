<?php

namespace App\Actions\Tublar\Summary;

use App\Http\Requests\Dashboard\Tublar;
use App\Models\Dashboard\Tublar\TublarSummary\TublarSummary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Arr;


class StoreSummaryAction
{
    public function handle(array $data)
    {
        $summary = TublarSummary::create(array_merge(Arr::except($data, ['details', 'description', 'colour_code']), [
            'user_id' => Auth::user()->id,
            'details' => json_encode($data['details']),
            'description' => json_encode($data['description']),
            'colour_code' => json_encode($data['colour_code']),
        ]));
        $summaryCount = TublarSummary::where('order_id', $summary->order_id)->where('type', $data['type'])->count();
        $summary->update([
            'report_num' =>  $summary->getOrders->number . '-' . strtoupper($summary->type) . '-' . ($summaryCount),
        ]);
        toastr(trans('Dashboard/toastr.succes'));
        return $summary;
    }
}
