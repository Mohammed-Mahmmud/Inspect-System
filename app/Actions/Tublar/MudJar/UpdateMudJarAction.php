<?php
namespace App\Actions\Tublar\MudJar;

use App\Models\Dashboard\Tublar\MudJar\MudJar;
use App\Models\Dashboard\Tublar\MudJar\MudJarBody;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UpdateMudJarAction
 {

    public function handle( MudJar $mudJar, array $data )
 {
    // dd($data['content']);
        $mudJar->update(array_merge( Arr::except( $data, [ 'content', 'visual', 'boroscopic', 'dimensional', 'mpi', 'liquid_penetrant', 'ultrasonic', 'eddy_current' ] ), [
            'user_id' => Auth::user()->id,
            'visual' => json_encode( $data[ 'visual' ] ),
            'boroscopic' => json_encode( $data[ 'boroscopic' ] ),
            'dimensional' => json_encode( $data[ 'dimensional' ] ),
            'mpi' => json_encode( $data[ 'mpi' ] ),
            'liquid_penetrant' => json_encode( $data[ 'liquid_penetrant' ] ),
            'ultrasonic' => json_encode( $data[ 'ultrasonic' ] ),
            'eddy_current' => json_encode( $data[ 'eddy_current' ] ),
        ] ) );
        $mudjarCount = MudJar::where( 'order_id', $mudJar->order_id )->where( 'type', $data[ 'type' ] )->count();
        $mudJar->update( [
            'report_num' =>  $mudJar->getOrders->number.'-'.strtoupper( $mudJar->type ).'-'.( $mudjarCount),
        ] );

       
        
        if(!empty($data['content'])){
            MudJarBody::where('mud_jar_id',$mudJar->id)->delete();
            foreach ( $data[ 'content' ] as $item ) {
                  MudJarBody::create( array_merge( $item, [
                    'mud_jar_id'  => $mudJar->id,
                ] ) );
            }
        }
        toastr( trans( 'Dashboard/toastr.info' ), 'info', trans( 'Dashboard/toastr.updated' ) );
        return $mudJar;

    }
}
