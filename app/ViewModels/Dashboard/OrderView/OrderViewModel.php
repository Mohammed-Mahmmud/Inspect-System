<?php
namespace App\ViewModels\Dashboard\OrderView;

use App\Models\Dashboard\Image;
use App\Models\Dashboard\Lifting\Mpi;
use Spatie\ViewModels\ViewModel;

class OrderViewModel extends ViewModel
{
    public $mpi;
    public $type;
    public $images;

    public function __construct($mpi = null)
    {
        $this->mpi = is_null($mpi) ? new Mpi(old()) : $mpi;
        $this->type = is_null($mpi) ? 'Create' : 'Edit';
        $this->images = is_null($mpi) ? "" :
        Image::where('report_id', $mpi->id)->get();
    }

    public function action(): string
    {
        return is_null($this->mpi->id)
        ? route('mpi.store')
        : route('mpi.update', $this->mpi->id);

    }

    public function method(): string
    {
        return is_null($this->mpi->id) ? 'POST' : 'PUT';
    }
    public function mpiImages()
    {
        return is_null($this->mpi->id)
        ? "null"
        : Image::where('report_id', $this->mpi->id)->get();
    }
}