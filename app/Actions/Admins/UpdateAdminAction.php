<?php
namespace App\Actions\Admins;

use Illuminate\Support\Arr;
use App\Models\Dashboard\Admin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateAdminAction
{

    public function handle(Admin $admin , array $data)
    {
        $admin->update(array_merge($data,[
            'role' =>1,
            'updated_by' =>Auth::user()->id,
            'created_by' =>0,
            'trash' => 0,
            ]));

            toastr(trans('Dashboard/toastr.info'),'info',trans('Dashboard/toastr.updated'));
            return $admin;


    }
}
