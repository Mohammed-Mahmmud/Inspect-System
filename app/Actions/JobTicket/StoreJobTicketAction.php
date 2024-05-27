<?php
namespace App\Actions\JobTicket;

use Illuminate\Support\Arr;
use App\Models\Dashboard\JobTicket;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard\JobTicketContent;

class StoreJobTicketAction
 {

    public function handle( array $data )
 {
        $jobticket = JobTicket::create( array_merge( Arr::except( $data, [ 'content' ] ), [
            'user_id' => Auth::user()->id
        ] ) );

        if ( !empty( $data[ 'content' ] ) ) {
            foreach ( $data['content'] as $content ) {
           JobTicketContent::create( array_merge( $content, [
                'job_ticket_id' => $jobticket->id
            ] ) );
        }
        }

        toastr( trans( 'Dashboard/toastr.succes' ) );
        return $jobticket;
    }
}
