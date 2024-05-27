<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranslationKey extends Model
{
    use HasFactory;
    public $table ='translation_keys';
    protected $fillable = [
        'key',
        'name',
    ];
}
