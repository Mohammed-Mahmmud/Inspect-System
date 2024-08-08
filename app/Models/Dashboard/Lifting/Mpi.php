<?php

namespace App\Models\Dashboard\Lifting;

use App\Models\Dashboard\Lifting\Mpi\Equipment;
use App\Models\Dashboard\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Mpi extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'mpi';
    protected $guarded = [];
    public $timestamps = true;
    const PDFVIEW = 'website.reports.pages.Lifting.MPI.mpi';
    const PDFPAPER = 'portrait';
    public function getDeCode($data = null)
    {
        if (isset($data) && is_string($data)) {
            return json_decode($data, true);
        } else {
            return [];
        }
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function getOrders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
