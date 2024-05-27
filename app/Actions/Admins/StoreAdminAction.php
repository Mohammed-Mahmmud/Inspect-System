<?php
namespace App\Actions\Admins;
use App\Helper\ImageHelper;
use App\Models\Dashboard\Admin;
use Illuminate\Support\Facades\Auth;

class StoreAdminAction
{
    use ImageHelper;
    public function handle(array $data)
    {
        if(Admin::where('role',1)->where('email', $data['email'])->exists()){
            return redirect()->back()->withErrors($data['email'].' '.trans('Dashboard/admins.exists'));
        }else{
       $admin = Admin::create(array_merge($data,[
           'role' => 1,
           'created_by' =>Auth::user()->id,
           'updated_by' =>0,
           'trash' => 0,
       ]));

            toastr(trans('Dashboard/toastr.succes'));
        return $admin;
        }
    }
}
