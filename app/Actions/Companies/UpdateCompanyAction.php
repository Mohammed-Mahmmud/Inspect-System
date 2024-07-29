<?php

namespace App\Actions\Companies;

use App\Models\Dashboard\Company;

class UpdateCompanyAction
{

    public function handle(Company $company, array $data)
    {
        $company->update($data);
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $company;
    }
}
