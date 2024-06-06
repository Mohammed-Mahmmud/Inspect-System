<?php

namespace App\Actions\Tublar\MudJar;

use App\Models\Dashboard\Tublar\MudJar\MudJar;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class UpdateMudJarAction
{

    public function handle(MudJar $mudJar, array $data)
    {
        $exceptedItems = ['visual', 'boroscopic', 'dimensional', 'content', 'mpi', 'liquid_penetrant', 'ultrasonic', 'eddy_current'];
        $methods = [];
        foreach (array_diff($exceptedItems, ['content']) as $method) {
            if (isset($data[$method])) {
                $methods[$method] = json_encode($data[$method]);
            }
        }
        $mudJar->update(array_merge(Arr::except($data, $exceptedItems), $methods));
        $mudjarCount = MudJar::where('order_id', $mudJar->order_id)->where('type', $data['type'])->count();
        $mudJar->update([
            'report_num' =>  $mudJar->getOrders->number . '-' . strtoupper($mudJar->type) . '-' . ($mudjarCount),
        ]);

        $mudJar->update(array_merge(Arr::except($data, $exceptedItems), $methods));
        if (!empty($data['content'])) {
            $mudJar->getDesc()->delete();
            foreach ($data['content'] as $item) {
                $mudJar->getDesc()->create([
                    'description' => json_encode($item),
                ]);
            }
        }
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $mudJar;
    }
}
