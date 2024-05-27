<?php
namespace App\Actions\CheckLists;

use App\Models\Dashboard\CheckList;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UpdateCheckListAction {
    public function handle( CheckList $checklist, array $data ) {
        $checklist->update( $data );
        toastr( trans( 'Dashboard/toastr.info' ), 'info', trans( 'Dashboard/toastr.updated' ) );
        return $checklist;

    }
}