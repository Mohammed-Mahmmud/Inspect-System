<?php

namespace App\Actions\Tublar\Tubs;

use App\Http\Requests\Dashboard\Tublar;
use App\Models\Dashboard\Tublar\Tubs\Tubs;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class StoreTubsAction
{
    public function handle(array $data)
    {
        $exceptedItems = ['magnetizing', 'magnetic_particles', 'other_methods', 'specification', 'equipment', 'desc', 'conn_inspected', 'drill_pipe_details'];
        $methods = [];
        foreach (array_diff($exceptedItems, ['desc']) as $method) {
            if (isset($data[$method])) {
                $methods[$method] = json_encode($data[$method]);
            }
        }
        $tubs = Tubs::create(array_merge(Arr::except($data, $exceptedItems), $methods));
        if (!empty($data['desc'])) {
            foreach ($data['desc'] as $item) {
                $tubs->getDesc()->create([
                    'description' => json_encode($item),
                ]);
            }
        }

        $tubsCount = Tubs::where('order_id', $tubs->order_id)->where('type', $data['type'])->count();
        $tubs->update([
            'report_num' =>  $tubs->getOrders->number . '-' . strtoupper($tubs->type) . '-' . ($tubsCount),
        ]);
        toastr(trans('Dashboard/toastr.succes'));
        return $tubs;
    }
}
