<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportDescription extends Model {
    use HasFactory;
    protected $table = 'report_desc';
    protected $guarded = [];
    public $timestamps = true;

    public function description() {
        return $this->morphTo();
    }

}
