<?php

namespace App\Actions\Lifting\Mpi;

use DateTime;
use App\Helper\ImageHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard\Lifting\Mpi;

class StoreMpiAction
{
    use ImageHelper;

    public function handle(array $data)
    {

        // dd( $data[ 'image' ] );
        $mpi = Mpi::create(array_merge(Arr::except($data, [
            'image', 'equipments', 'specification', 'magnetizing_current', 'magnetic_particles', 'surface_condition', 'next_date', 'equipment'
        ]), [
            'created_by' => Auth::user()->id,
            'specification' =>      json_encode($data['specification']),
            'magnetizing_current' => json_encode($data['magnetizing_current']),
            'magnetic_particles' => json_encode($data['magnetic_particles']),
            'surface_condition' =>      json_encode($data['surface_condition']),
            'equipment' =>      json_encode($data['equipment']),
            'next_date' => getNextDate($data['date'], 6)
        ]));
        // storing images
        if (isset($data['image'])) {
            foreach ($data['image'] as $image) {
                $this->StoreImage($image, $mpi, $mpi->type);
            }
        }

        //mpi reports number
        $mpiCount = Mpi::where('order_id', $mpi->order_id)->count();
        $mpi->update([
            'report_number' => $mpi->getOrders->number . '-' . strtoupper($mpi->type) . '-' . $mpiCount
        ]);

        toastr(trans('Dashboard/toastr.succes'));
        return $mpi;
    }
}
