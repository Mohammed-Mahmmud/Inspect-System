<?php

namespace App\Models\Dashboard\Tublar\Tools;

use App\Models\Dashboard\ReportDescription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\User;

class Tools extends Model
{
    use HasFactory;
    protected $table = 'tools';
    protected $guarded = [];
    public $timestamps = true;

    public function getDesc()
    {
        return $this->morphMany(ReportDescription::class, 'model');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($tool) {
            $tool->getDesc()->delete();
        });
    }
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getOrders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function getAccept()
    {
        return $this->belongsTo(Accept::class, 'accept');
    }

    public function getSummary($value)
    {
        return Accept::where('value', $value)->value('name');
    }
}
