<?php
namespace App\Actions\Orders;

use App\Models\Dashboard\Rig;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Company;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UpdateOrderAction
 {

    public function handle( Order $order, array $data )
 {

        $company =  ucwords( str_replace( ' ', '_', Company::where( 'id', $data[ 'company_id' ] )->value( 'name' ) ) );
        $rig = ucwords( str_replace( ' ', '_', Rig::where( 'id', $data[ 'rig_id' ] )->value( 'name' ) ) );
        $orderCount = Order::count();
        $number = 'STC' . '-'. $orderCount.'/'.substr( date( 'Y' ), -2 ) .'-'. $company . '-' . $rig;

        $newData = array_merge( $data, [
            'updated_by' =>Auth::user()->id,
            'name' =>$number. '-' . $data[ 'date' ],
            'number' => $number,
        ] );
     
        $order->update( $newData );

        toastr( trans( 'Dashboard/toastr.info' ), 'info', trans( 'Dashboard/toastr.updated' ) );
        return $order;

    }
}