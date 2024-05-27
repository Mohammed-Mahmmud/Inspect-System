<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dashboard\Company;

class Rig extends Model
{
    use HasFactory;
    protected $table = 'rig';
    protected $guarded = [];
    public $timestamps = true;
    
    
    
    public function Companies()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
