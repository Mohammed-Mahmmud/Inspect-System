<?php

namespace App\Models\Dashboard\Lifting;

use App\Models\Dashboard\CheckList;
use App\Models\Dashboard\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    protected $table = 'thorough_examination';
    protected $guarded = [];
    const PDFVIEW = 'website.reports.pages.Lifting.Examination.examination';
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
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getOrders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function getShakleSize()
    {
        return $this->belongsTo(ShakleSize::class, 'shaklesize_id');
    }

    public function jobChecklist()
    {
        return $this->hasMany(CheckList::class, 'thorough_examination_id');
    }
}
