<?php

namespace App\Models\Dashboard\Tublar\MudJar;

use  App\Models\Dashboard\Tublar\MudJar\MudJarBody;
use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MudJar extends Model {
    use HasFactory;
    protected $table = 'mud_jar';
    protected $guarded = [];
    public $timestamps = true;

    public  function getBody() {
        return $this->hasMany( MudJarBody::class, 'mud_jar_id' );
    }

    public function getUser() {
        return $this->belongsTo( User::class, 'user_id' );
    }

    public function getOrders() {
        return $this->belongsTo( Order::class, 'order_id' );
    }

    public function getAccept() {
        return $this->belongsTo( Accept::class, 'accept' );
    }

    public function getDeCode( $data = null ) {
        if ( isset( $data ) && is_string( $data ) ) {
            return json_decode( $data, true );
        } else {
            return [];
        }
    }

}
