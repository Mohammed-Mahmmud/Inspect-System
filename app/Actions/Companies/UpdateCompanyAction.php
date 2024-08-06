<?php

namespace App\Actions\Companies;

use App\Models\Dashboard\Company;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateCompanyAction
{

    public function handle(Company $company, array $data)
    {

        $password = $data['password'];
        $data['password'] = Hash::make($password);
        $company->update(array_merge($data, [
            'pass' => $password
        ]));
        // dd($data);
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $company;
    }
}
