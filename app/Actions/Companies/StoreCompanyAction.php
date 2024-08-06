<?php

namespace App\Actions\Companies;

use App\Models\Dashboard\Company;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;


class StoreCompanyAction
{
    public function handle(array $data)
    {
        $password = Company::generateRandomPassword(9);
        $company = Company::create(array_merge($data, [
            'email' => str_replace(' ', '', $data['name']) . '@stc-eg.com',
            'pass' => $password,
            'password' => Hash::make($password),
        ]));
        toastr(trans('Dashboard/toastr.succes'));
        return $company;
    }
}
