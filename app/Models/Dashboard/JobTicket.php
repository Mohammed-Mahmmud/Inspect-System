<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class JobTicket extends Model {
    use HasFactory;
    protected $table = 'job_ticket';
    protected $guarded = [];
    public $timestamps = true;

    public function getOrders() {
        return $this->belongsTo( Order::class, 'order_id' );
    }

    public function getUsers() {
        return $this->belongsTo( User::class, 'user_id' );
    }

    public function jobTicketContents() {
        return $this->hasMany( JobTicketContent::class,'job_ticket_id');
    }
}