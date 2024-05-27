<?php
namespace App\Actions\Tublar\Tools;

use App\Http\Requests\Dashboard\Tublar;
use App\Models\Dashboard\ReportDescription;
use App\Models\Dashboard\Tublar\Tools\Tools;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class DeleteToolsAction
 {
    public function handle( $tools )
    {  
         $tools->getDesc()->delete();
        $tools->delete();
        toastr( trans( 'Dashboard/toastr.destroy' ), 'error', trans( 'Dashboard/toastr.deleted' ) );
        return $tools;
    }
}
