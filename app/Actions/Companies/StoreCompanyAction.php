<?php

namespace App\Actions\Companies;

use App\Models\Dashboard\Company;
use Illuminate\Support\Facades\App;


class StoreCompanyAction
{
    public function handle(array $data)
    {
        $company = Company::create(array_merge($data, [
            'email' => str_replace(' ', '', $data['name']) . '@stc-eg.com',
            'password' => Company::generateRandomPassword(9),
        ]));

        toastr(trans('Dashboard/toastr.succes'));
        return $company;
    }
}
