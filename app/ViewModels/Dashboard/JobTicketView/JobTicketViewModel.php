<?php
namespace App\ViewModels\Dashboard\jobTicketView;

use App\Models\Dashboard\Order;
use Spatie\ViewModels\ViewModel;
use App\Models\Dashboard\JobTicket;
use App\Models\Dashboard\JobTicketContent;

class JobTicketViewModel extends ViewModel
{
    public $jobTicket;
    public $type;
    public $content;

    public function __construct($jobTicket = null)
    {
        $this->jobTicket = is_null($jobTicket) ? new JobTicket(old()) : $jobTicket;
        $this->type = is_null($jobTicket) ? 'Create' : 'Edit';

    }

    public function action(): string
    {
        return is_null($this->jobTicket->id)
        ? route('jobTicket.store')
        : route('jobTicket.update', $this->jobTicket->id);

    }

    public function method(): string
    {
        return is_null($this->jobTicket->id) ? 'POST' : 'PUT';
    }

    public function orders(){
        return Order::get() ;
    }
    // public function getContent(){
    //     return isset($this->jobTicket)
    //     ? JobTicketContent::where('job_ticket_id', $this->jobTicket->id)->get()
    //     : collect();

    // }
}