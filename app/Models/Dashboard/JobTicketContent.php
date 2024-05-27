<?php

namespace App\Models\Dashboard;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTicketContent extends Model
{
    use HasFactory;

    protected $table = 'job_ticket_content';
    protected $guarded = [];
    public $timestamps = true;


    
}