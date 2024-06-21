<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class StoreUserAction
{
    public function handle(array $data)
    {
        $user = User::create(array_merge($data, [
            'created_by' => Auth::user()->id,
        ]));
        isset($data['roles']) ? $user->assignRole($data['roles']) : '';
        toastr(trans('Dashboard/toastr.succes'));
        return $user;
    }
}
