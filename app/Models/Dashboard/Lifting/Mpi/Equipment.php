<?php

namespace App\Models\Dashboard\Lifting\Mpi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'mpi_equipment';
    protected $guarded = [];
    public $timestamps = true;
    
}
