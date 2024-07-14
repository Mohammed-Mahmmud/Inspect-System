<?php

namespace App\Actions\Users;

use App\Helper\ImageHelper;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UpdateUserAction
{
    use ImageHelper;
    public function handle(User $user, array $data)
    {
        // dd($data);
        $user->update(array_merge($data));
        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        isset($data['roles']) ? $user->assignRole($data['roles']) : '';
        if (!empty($data['image'])) {
            if (!empty($user->getFirstMedia($user->name))) {
                $user->clearMediaCollection($user->name);
            }

            foreach ($data['image'] as $image) {
                $this->StoreImage($image, $user, $user->name);
            }
        }
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $user;
    }
}
