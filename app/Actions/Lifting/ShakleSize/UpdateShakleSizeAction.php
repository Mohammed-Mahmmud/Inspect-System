<?php
namespace App\Actions\Lifting\ShakleSize;

use App\Models\Dashboard\Lifting\ShakleSize;
use Illuminate\Support\Facades\App;

class UpdateShakleSizeAction
 {

    public function handle( ShakleSize $shaklesize, array $data )
 {
        $shaklesize->update( $data );
        toastr( trans( 'Dashboard/toastr.info' ), 'info', trans( 'Dashboard/toastr.updated' ) );
        return $shaklesize;

    }
}