<?php

namespace App\Actions\Users;

use App\Helper\ImageHelper;
use App\Models\User;
use Illuminate\Support\Facades\App;

class StoreUserAction
{
    use ImageHelper;
    public function handle(array $data)
    {
        $user = User::create(array_merge($data));
        if (isset($data['image'])) {
            foreach ($data['image'] as $image) {
                $this->StoreImage($image, $user, $user->name);
            }
        }
        isset($data['roles']) ? $user->assignRole($data['roles']) : '';
        toastr(trans('Dashboard/toastr.succes'));
        return $user;
    }
}
