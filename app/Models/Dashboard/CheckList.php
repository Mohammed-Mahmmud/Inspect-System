<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckList extends Model
{
    use HasFactory;
    protected $table = 'checklist';
    protected $guarded = [];
    public $timestamps = true;

}
