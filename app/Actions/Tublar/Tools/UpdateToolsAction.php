<?php
namespace App\Actions\Tublar\Tools;

use App\Models\Dashboard\Tublar\Tools\Tools;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UpdateToolsAction
 {
     public function handle( Tools $tools, array $data )
     {
        $tools->update( array_merge( Arr::except( $data, [ 'desc','methods' ] ), [
            'user_id' => Auth::user()->id,
            'methods' => json_encode( $data[ 'methods' ] ),
        ] ) );
        if(!empty($data['desc'])){
            $tools->getDesc()->delete();
            foreach($data['desc'] as $item){
                $tools->getDesc()->create([
                    'description' => json_encode($item),
                ]);  
            }
        }
        $toolsCount = Tools::where( 'order_id', $tools->order_id )->where( 'type', $data[ 'type' ] )->count();
        $tools->update( [
            'report_num' =>  $tools->getOrders->number.'-'.strtoupper( $tools->type ).'-'.( $toolsCount ),
        ] );
        toastr( trans( 'Dashboard/toastr.info' ), 'info', trans( 'Dashboard/toastr.updated' ) );
        return $tools;

    }
}