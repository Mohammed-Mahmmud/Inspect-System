<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accept extends Model {
    use HasFactory;
    protected $table = 'acceptance';
    protected $guarded = [];
    public $timestamps = true;
}