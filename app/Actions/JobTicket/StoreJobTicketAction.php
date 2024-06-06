<?php

namespace App\Actions\JobTicket;

use Illuminate\Support\Arr;
use App\Models\Dashboard\JobTicket;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard\JobTicketContent;

class StoreJobTicketAction
{

    public function handle(array $data)
    {
        $jobticket = JobTicket::create(Arr::except($data, ['content']));

        if (!empty($data['content'])) {
            foreach ($data['content'] as $item) {
                $jobticket->getDesc()->create([
                    'description' => json_encode($item),
                ]);
            }
        }
        toastr(trans('Dashboard/toastr.succes'));
        return $jobticket;
    }
}
