<?php
namespace App\Actions\Companies;

use App\Models\Dashboard\Company;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UpdateCompanyAction
{

    public function handle(Company $company, array $data)
    {
        $company->update(array_merge($data , [
            'updated_by' =>Auth::user()->id
        ]));
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $company;

    }
}