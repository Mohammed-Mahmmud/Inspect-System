<?php
namespace App\Actions\Rigs;

use App\Models\Dashboard\Rig;
use Illuminate\Support\Facades\App;

class UpdateRigAction
{
    
    public function handle(Rig $rig , array $data)
    {
     
        $rig->update([
            'name' => $data['name'],
            'location' => $data['location'],
            'company_id' => $data['company_id'],
            
            
            ]);
            toastr(trans('Dashboard/toastr.info'),'info',trans('Dashboard/toastr.updated'));
            return $rig; 
        

    }
}