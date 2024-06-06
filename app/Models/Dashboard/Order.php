<?php

namespace App\Models\Dashboard;

use App\Models\User;
use App\Models\Dashboard\Rig;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\ReportType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];
    public $timestamps = true;

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
    // public function ReportType()
    // {
    //     return $this->belongsTo(ReportType::class, 'report_id');
    // }
    public function userStatus($id)
    {
        $user = User::where('id', $id)->first();

        if ($user->trash == 1) {
            return $user->name . " ( Deleted )";
        }
        return $user->name;
    }
}
