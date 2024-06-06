<?php

namespace App\Actions\JobTicket;

use Illuminate\Support\Arr;
use App\Models\Dashboard\JobTicket;
use Illuminate\Support\Facades\App;
use App\Models\Dashboard\JobTicketContent;

class UpdateJobTicketAction
{
    public function handle(JobTicket $jobticket, array $data)
    {
        $jobticket->update(Arr::except($data, ['content']));

        if (!empty($data['content'])) {
            $jobticket->getDesc()->delete();
            foreach ($data['content'] as $item) {
                $jobticket->getDesc()->create([
                    'description' => json_encode($item),
                ]);
            }
        }
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $jobticket;
    }
}
