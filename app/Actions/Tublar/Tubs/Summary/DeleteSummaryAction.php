<?php

namespace App\Actions\Tublar\Tubs\Summary;

use App\Http\Requests\Dashboard\Tublar;
use Illuminate\Support\Facades\App;

class DeleteSummaryAction
{
    public function handle($tubs)
    {
        $tubs->getDesc()->delete();
        $tubs->delete();
        toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
        return $tubs;
    }
}
