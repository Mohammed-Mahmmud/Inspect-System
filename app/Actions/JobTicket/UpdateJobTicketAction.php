<?php
namespace App\Actions\JobTicket;

use Illuminate\Support\Arr;
use App\Models\Dashboard\JobTicket;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\JobTicketContent;

class UpdateJobTicketAction
{
    public function handle(JobTicket $jobticket, array $data)
    {         
        $jobticket->update(Arr::except( $data, [ 'content' ] ));
     

        if ( !empty( $data[ 'content' ] ) ) {
            JobTicketContent::where( 'job_ticket_id', $jobticket->id )->delete();
            foreach ( $data['content'] as $content ) {
           JobTicketContent::create( array_merge( $content, [
            'job_ticket_id' => $jobticket->id  
            ] ) );
        }
        }
        
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $jobticket;

    }
}