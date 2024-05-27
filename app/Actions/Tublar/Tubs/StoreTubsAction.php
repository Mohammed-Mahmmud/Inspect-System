<?php
namespace App\Actions\Tublar\Tubs;

use App\Http\Requests\Dashboard\Tublar;
use App\Models\Dashboard\ReportDescription;
use App\Models\Dashboard\Tublar\Tubs\Tubs;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class StoreTubsAction
 {
    public function handle( array $data )
 {

        dd($data);
     $tubs = Tubs::create( array_merge( Arr::except( $data, [ 'desc','methods' ] ), [
            'user_id' => Auth::user()->id,
            'methods' => json_encode( $data[ 'methods' ] ),
            ] ) );

            if(!empty($data['desc'])){
                foreach($data['desc'] as $item){
                    $tubs->getDesc()->create([
                        'description' => json_encode($item),
                    ]);
                }
            }

        $tubsCount = tubs::where( 'order_id', $tubs->order_id )->where( 'type', $data[ 'type' ] )->count();
        $tubs->update( [
            'report_num' =>  $tubs->getOrders->number.'-'.strtoupper( $tubs->type ).'-'.( $tubsCount + 1 ),
        ] );
        toastr( trans( 'Dashboard/toastr.succes' ) );
        return $tubs;
    }
}