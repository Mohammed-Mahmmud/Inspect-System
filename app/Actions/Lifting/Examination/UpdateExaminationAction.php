<?php

namespace App\Actions\Lifting\Examination;

use App\Models\Dashboard\CheckList;
use App\Models\Dashboard\Lifting\Examination;
use DateTime;
use Illuminate\Support\Arr;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UpdateExaminationAction
{

    public function handle(Examination $examination, array $data)
    {
        // dd( $data[ 'checklist' ] );

        if (isset($data['thorough_type'])) {
            $type = $data['thorough_type'];
        } else {
            $type = $data['type'];
        }
        $examCount = Examination::where('order_id', $examination->order_id)->where('type', $type)->count();
        $examination->update(array_merge(Arr::except($data, ['checklist', 'checklist_type']), [
            'user_id' => Auth::user()->id,
            'carried_exam' => json_encode($data['carried_exam']),
            'next_exam' => getNextDate($data['date'], 6),
        ]));

        $examination->update(
            ['report_number' => $examination->getOrders->number . '-' . strtoupper($examination->type) . '-' . $examCount]
        );

        if (isset($data['checklist_type'])) {
            CheckList::where('thorough_examination_id', $examination->id)->delete();
            foreach (Arr::except($data['checklist'], ['type']) as $item) {
                CheckList::create(array_merge($item, [
                    'thorough_examination_id' => $examination->id,
                    'type' => $data['checklist']['type'],
                ]));
            }
        }
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));

        return $examination;
    }
}
