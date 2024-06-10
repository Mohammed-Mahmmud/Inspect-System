<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UpdateUserAction
{

    public function handle(User $user, array $data)
    {
        $user->update(array_merge($data, [
            'updated_by' => Auth::user()->id,

        ]));
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $user;
    }
}
