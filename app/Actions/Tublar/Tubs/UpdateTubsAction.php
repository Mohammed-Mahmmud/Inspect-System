<?php

namespace App\Actions\Tublar\Tubs;

use App\Models\Dashboard\Tublar\Tubs\tubs;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class UpdateTubsAction
{
    public function handle(tubs $tubs, array $data)
    {
        $exceptedItems = ['magnetizing', 'magnetic_particles', 'other_methods', 'specification', 'equipment', 'desc', 'conn_inspected', 'drill_pipe_details'];
        $methods = [];
        foreach (array_diff($exceptedItems, ['desc']) as $method) {
            if (isset($data[$method])) {
                $methods[$method] = json_encode($data[$method]);
            }
        }
        $tubs->update(array_merge(Arr::except($data, $exceptedItems), $methods));
        if (!empty($data['desc'])) {
            $tubs->getDesc()->delete();
            foreach ($data['desc'] as $item) {
                $tubs->getDesc()->create([
                    'description' => json_encode($item),
                ]);
            }
        }

        $tubsCount = tubs::where('order_id', $tubs->order_id)->where('type', $data['type'])->count();
        $tubs->update([
            'report_number' =>  $tubs->getOrders->number . '-' . strtoupper($tubs->type) . '-' . ($tubsCount),
        ]);
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $tubs;
    }
}
