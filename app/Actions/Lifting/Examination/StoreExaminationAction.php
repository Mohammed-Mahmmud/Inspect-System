<?php
namespace App\Actions\Lifting\Examination;
use App\Models\Dashboard\CheckList;
use App\Models\Dashboard\Lifting\Examination;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Facades\Toastr;

class StoreExaminationAction
 {
    public function handle( array $data )
 {
        if ( $data[ 'carried_out' ] == 'interval_year' ) {
            $nextExam = 12 ;
        } elseif ( $data[ 'carried_out' ] == 'interval_month' ) {
            $nextExam = 6 ;
        }

        $examination = Examination::create( array_merge( Arr::except( $data, [ 'checklist', 'checklist_type' ] ), [
            'user_id' => Auth::user()->id,
            'carried_exam' => json_encode( $data[ 'carried_exam' ] ),
            'next_exam'=>getNextDate( $data[ 'exam_date' ], $nextExam )
            ,
        ] ) );

        if ( isset( $data[ 'thorough_type' ] ) ) {
            $type = $data[ 'thorough_type' ];
        } else {
            $type = $examination->type;

        }
        $examCount = Examination::where( 'order_id', $examination->order_id )->where( 'type', $data[ 'type' ] )->count();
        $examination->update( [
            'report_number' =>  $examination->getOrders->number.'-'.strtoupper( $type ).'-'.( $examCount + 1 ),
        ] );

        if ( isset( $data[ 'checklist_type' ] ) ) {
            foreach ( Arr::except( $data[ 'checklist' ], [ 'type' ] ) as $item ) {
                CheckList::create( array_merge( $item, [
                    'thorough_examination_id' => $examination->id,
                    'type'=>$data[ 'checklist' ][ 'type' ],
                ] ) );
            }
        }
        toastr( trans( 'Dashboard/toastr.succes' ) );
        return $examination;
    }
}