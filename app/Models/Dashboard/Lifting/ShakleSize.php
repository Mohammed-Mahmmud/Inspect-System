<?php

namespace App\Models\Dashboard\Lifting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShakleSize extends Model {
    use HasFactory;

    protected $table = 'shakle_size';
    protected $guarded = [];
    public $timestamps = true;

}