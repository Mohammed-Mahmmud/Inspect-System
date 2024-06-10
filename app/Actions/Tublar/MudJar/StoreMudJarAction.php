<?php

namespace App\Actions\Tublar\MudJar;

use App\Http\Requests\Dashboard\Tublar;
use App\Models\Dashboard\Tublar\MudJar\MudJar;
use App\Models\Dashboard\Tublar\MudJar\MudJarBody;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Arr;


class StoreMudJarAction
{
    public function handle(array $data)
    {
        $exceptedItems = ['visual', 'boroscopic', 'dimensional', 'content', 'mpi', 'liquid_penetrant', 'ultrasonic', 'eddy_current'];
        $methods = [];
        foreach (array_diff($exceptedItems, ['content']) as $method) {
            if (isset($data[$method])) {
                $methods[$method] = json_encode($data[$method]);
            }
        }
        $mudJar = MudJar::create(array_merge(Arr::except($data, $exceptedItems), $methods));
        $mudjarCount = MudJar::where('order_id', $mudJar->order_id)->where('type', $data['type'])->count();
        $mudJar->update([
            'report_number' =>  $mudJar->getOrders->number . '-' . strtoupper($mudJar->type) . '-' . ($mudjarCount),
        ]);

        if (!empty($data['content'])) {
            foreach ($data['content'] as $item) {
                $mudJar->getDesc()->create([
                    'description' => json_encode($item),
                ]);
            }
        }
        toastr(trans('Dashboard/toastr.succes'));
        return $mudJar;
    }
}
