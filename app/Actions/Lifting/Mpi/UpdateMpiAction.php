<?php

namespace App\Actions\Lifting\Mpi;

use DateTime;
use App\Helper\ImageHelper;
use Illuminate\Support\Arr;
use App\Models\Dashboard\Image;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\Lifting\Mpi\Equipment;

class UpdateMpiAction
{
    use ImageHelper;

    public function handle(Mpi $mpi, array $data)
    {
        $mpiCount = Mpi::where('order_id', $mpi->order_id)->count();
        $mpi->update(array_merge(Arr::except($data, [
            'image', 'equipments', 'specification', 'magnetizing_current', 'magnetic_particles', 'surface_condition', 'next_date', 'equipment'
        ]), [
            'updated_by' => Auth::user()->id,
            'magnetizing_current' => json_encode($data['magnetizing_current']),
            'magnetic_particles' => json_encode($data['magnetic_particles']),
            'specification' =>      json_encode($data['specification']),
            'surface_condition' =>      json_encode($data['surface_condition']),
            'equipment' =>      json_encode($data['equipment']),
            'next_date' => getNextDate($data['date'], 6),

        ]));

        $mpi->update([
            'report_number' => $mpi->getOrders->number . '-' . strtoupper($mpi->type) . '-' . $mpiCount
        ]);

        if (!empty($data['image'])) {
            $mpi->clearMediaCollection($mpi->type);
            foreach ($data['image'] as $image) {
                $this->StoreImage($image, $mpi, $mpi->type);
            }
        }
        return $mpi;
    }
}
