<?php


namespace App\Models\Dashboard\Tublar\Tubs;

use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\ReportDescription;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tubs extends Model
{
    use HasFactory;

    const MAGNETIZING = ['ac_yoke', 'dc_coil', 'permanent_magnet'];
    protected $table = 'tubs';
    protected $guarded = [];
    public $timestamps = true;
    const PDFVIEW = 'website.reports.pages.Tublar.Tubs.report';
    const PDFPAPER = 'landscape';
    public function getDesc()
    {
        return $this->morphMany(ReportDescription::class, 'model');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($tubs) {
            $tubs->getDesc()->delete();
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
