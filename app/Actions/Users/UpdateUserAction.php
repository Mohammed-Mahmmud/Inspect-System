<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateUserAction
{

    public function handle(User $user, array $data)
    {
        $user->update(array_merge($data));
        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        isset($data['roles']) ? $user->assignRole($data['roles']) : '';
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $user;
    }
}
