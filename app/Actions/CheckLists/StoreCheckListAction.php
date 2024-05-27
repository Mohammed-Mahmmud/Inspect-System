<?php
namespace App\Actions\CheckLists;

use App\Models\Dashboard\CheckList;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
class StoreCheckListAction
{
public function handle(array $data)
    {
        
       $checklist = CheckList::create($data);
        toastr(trans('Dashboard/toastr.succes'));
        return $checklist;
     
    }
}