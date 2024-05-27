<?php

namespace App\Actions\Users;

use App\Models\Dashboard\Admin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StoreUserAction
{
    public function handle(array $data)
    {
        if (Admin::where('role', 2)->where('email', $data['email'])->exists()) {
            return redirect()->back()->withErrors($data['email'] . ' ' . trans('Dashboard/user.exists'));
        } else {
            $user = Admin::create(array_merge($data, [
                'role' => 2,
                'created_by' => Auth::user()->id,
                'updated_by' => 0,
                'trash' => 0,
            ]));
            toastr(trans('Dashboard/toastr.succes'));
            return $user;
        }
    }
}
