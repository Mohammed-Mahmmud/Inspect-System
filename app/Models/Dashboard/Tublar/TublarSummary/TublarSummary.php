<?php

namespace App\Models\Dashboard\Tublar\TublarSummary;

use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TublarSummary extends Model
{
    use HasFactory;
    protected $table = 'tublar_summary';
    protected $guarded = [];
    public $timestamps = true;
    const PDFVIEW = 'website.reports.pages.Lifting.MPI.mpi';
    const PDFPAPER = 'portrait';
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
}
