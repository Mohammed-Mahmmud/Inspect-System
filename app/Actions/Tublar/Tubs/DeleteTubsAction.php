<?php
namespace App\Actions\Tublar\Tubs;

use App\Http\Requests\Dashboard\Tublar;
use App\Models\Dashboard\ReportDescription;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class DeleteTubsAction
 {
    public function handle( $tubs )
    {
        dd($tubs);
         $tubs->getDesc()->delete();
        $tubs->delete();
        toastr( trans( 'Dashboard/toastr.destroy' ), 'error', trans( 'Dashboard/toastr.deleted' ) );
        return $tubs;
    }
}