<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class StoreUserAction
{
    public function handle(array $data)
    {
        if (User::where('email', $data['email'])->exists()) {
            return redirect()->back()->withErrors($data['email'] . ' ' . trans('Dashboard/user.exists'));
        } else {
            $user = User::create(array_merge($data, [
                'created_by' => Auth::user()->id,

            ]));
            toastr(trans('Dashboard/toastr.succes'));
            return $user;
        }
    }
}
