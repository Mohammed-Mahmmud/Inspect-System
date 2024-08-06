<?php

namespace App\Models\Dashboard;

use App\Models\Dashboard\Company;
use App\Models\Dashboard\JobTicket;
use App\Models\Dashboard\Lifting\Examination;
use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\ReportType;
use App\Models\Dashboard\Rig;
use App\Models\Dashboard\Tublar\MudJar\MudJar;
use App\Models\Dashboard\Tublar\Tools\Tools;
use App\Models\Dashboard\Tublar\Tubs\Tubs;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];
    public $timestamps = true;
    const STATUS = ['Closed', 'Open'];
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

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id')->where('role', 2);
    }
    public function Companies()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function Rigs()
    {
        return $this->belongsTo(Rig::class, 'rig_id');
    }

    public function userStatus($id)
    {
        $user = User::where('id', $id)->first();

        if ($user->trash == 1) {
            return $user->name . " ( Deleted )";
        }
        return $user->name;
    }

    // reports data
    public function mpis()
    {
        return $this->hasMany(Mpi::class, 'order_id');
    }
    public function examinations()
    {
        return $this->hasMany(Examination::class, 'order_id');
    }
    public function mudjars()
    {
        return $this->hasMany(MudJar::class, 'order_id');
    }
    public function tools()
    {
        return $this->hasMany(Tools::class, 'order_id');
    }
    public function tubs()
    {
        return $this->hasMany(Tubs::class, 'order_id');
    }
    public function jobtickets()
    {
        return $this->hasMany(JobTicket::class, 'order_id');
    }
}
