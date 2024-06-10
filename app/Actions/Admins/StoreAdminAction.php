<?php

namespace App\Actions\Admins;

use App\Helper\ImageHelper;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StoreAdminAction
{
    use ImageHelper;
    public function handle(array $data)
    {
        if (User::where('email', $data['email'])->exists()) {
            return redirect()->back()->withErrors($data['email'] . ' ' . trans('Dashboard/admins.exists'));
        } else {
            $admin = User::create(array_merge($data, [
                'created_by' => Auth::user()->id,
            ]));
            toastr(trans('Dashboard/toastr.succes'));
            return $admin;
        }
    }
}
