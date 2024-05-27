<?php
namespace App\ViewModels\Dashboard\MpiView;

use App\Models\Dashboard\Image;
use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\Order;
use Illuminate\Support\Facades\Route;
use Spatie\ViewModels\ViewModel;

class MpiViewModel extends ViewModel
{
    public $mpi;
    public $type;

    public function __construct($mpi = null , $equipment=null)
    {
        $this->mpi = is_null($mpi) ? new Mpi(old()) : $mpi;
        $this->type = is_null($mpi) ? 'Create' : 'Edit';

    }

    public function action(): string
    {
        return is_null($this->mpi->id) ||Route::currentRouteName() === 'mpi.reports.repeat'
        ? route('mpi.reports.store')
        : route('mpi.reports.update', $this->mpi->id);

    }

    public function method(): string
    {
        return is_null($this->mpi->id) ||Route::currentRouteName() === 'mpi.reports.repeat'
            ? 'POST' : 'PUT';
    }

    public function orders(){
        return Order::get() ;
    }
}
