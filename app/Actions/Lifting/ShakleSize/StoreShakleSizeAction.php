<?php
namespace App\Actions\Lifting\ShakleSize;

use App\Models\Dashboard\Lifting\ShakleSize;
use Illuminate\Support\Facades\App;


class StoreShakleSizeAction
{
    public function handle(array $data)
    {
        
        if(ShakleSize::where('size', $data['size'])->exists()){
            return redirect()->back()->withErrors($data['size'].' '.trans('Dashboard/user.exists'));
        }else{ 
       $shaklesize = ShakleSize::create($data);
        toastr(trans('Dashboard/toastr.succes'));
        return $shaklesize;
        }
    }
}