<?php
namespace App\Actions\Users;

use Illuminate\Support\Arr;
use App\Models\Dashboard\Admin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateUserAction
{

    public function handle(Admin $user , array $data)
    {

        $user->update(array_merge($data,[
            'role' => 2 ,
            'updated_by' =>Auth::user()->id,
            'created_by' =>0,
            'trash' => 0,
            ]));
            toastr(trans('Dashboard/toastr.info'),'info',trans('Dashboard/toastr.updated'));
            return $user;


    }
}
