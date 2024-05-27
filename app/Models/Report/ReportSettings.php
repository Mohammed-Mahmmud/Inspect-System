<?php

namespace App\Models\Report;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportSettings extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia ;
    protected $table = 'report_settings';
    protected $guarded = [];
    public $timestamps = true;
}
