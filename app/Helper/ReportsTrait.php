<?php

namespace App\Helper;

use App\Helper\TranslationHelper;

trait ReportsTrait
{
    public function reportAuthChecker($user_id)
    {
        $user = auth()->user();
        if ($user->id != $user_id && !$user->can('editor')) {
            // dd('welcome');
            session()->flash('error', TranslationHelper::translate('Unauthorized access'));
            return abort('403', TranslationHelper::translate(ucwords('un authorized access : you are not allowed to access that page')));
        }
    }
}
