<?php
namespace App\Actions\Tublar\Tools;

use App\Http\Requests\Dashboard\Tublar;
use App\Models\Dashboard\ReportDescription;
use App\Models\Dashboard\Tublar\Tools\Tools;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class StoreToolsAction
 {
    public function handle( array $data )
 {

    
     $tools = Tools::create( array_merge( Arr::except( $data, [ 'desc','methods' ] ), [
            'user_id' => Auth::user()->id,
            'methods' => json_encode( $data[ 'methods' ] ),
            ] ) );

            if(!empty($data['desc'])){
                foreach($data['desc'] as $item){
                    $tools->getDesc()->create([
                        'description' => json_encode($item),
                    ]);  
                }
            }

        $toolsCount = Tools::where( 'order_id', $tools->order_id )->where( 'type', $data[ 'type' ] )->count();
        $tools->update( [
            'report_num' =>  $tools->getOrders->number.'-'.strtoupper( $tools->type ).'-'.( $toolsCount + 1 ),
        ] );
        toastr( trans( 'Dashboard/toastr.succes' ) );
        return $tools;
    }
}
