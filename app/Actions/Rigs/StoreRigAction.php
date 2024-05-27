<?php
namespace App\Actions\Rigs;
use App\Models\Dashboard\Rig;
use Illuminate\Support\Facades\App;


class StoreRigAction
{
    public function handle(array $data)
    {
        
        if(Rig::where('name', $data['name'])->Where('location', $data['location'])->where('company_id',$data['company_id'])->exists()){
            return redirect()->back()->withErrors($data['name'].' '.trans('Dashboard/user.exists'));
        }else{ 
       $rig = Rig::create([
        'name' => $data['name'],
        'location' => $data['location'],
        'company_id' => $data['company_id'],
        ]);
        toastr(trans('Dashboard/toastr.succes'));
        return $rig;
        }
    }
}


