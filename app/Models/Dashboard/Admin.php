<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class
Admin extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $guarded=[];
    public $timestamps = true;

}
