<?php
namespace App\Actions\Orders;
use App\Models\Dashboard\Rig;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Company;
use Illuminate\Support\Facades\App;
use App\Models\Dashboard\ReportType;
use Illuminate\Support\Facades\Auth;

class StoreOrderAction
{
    public function handle(array $data)
    {
        $company =  ucwords(Company::where('id',$data['company_id'])->value('name'));
        $rig =ucwords(str_replace(' ', '_',Rig::where('id',$data['rig_id'])->value('name')));
        $orderCount = Order::count()+1;
        $number = 'STC' . '-'. $orderCount."/".substr(date("Y"), -2) ."-". $company . '-' . $rig;

       $order = Order::create(array_merge($data,[
        'created_by' =>Auth::user()->id,
        'name' =>$number. '-' . $data['date'] ,
        'number' => $number ,
    ]));
// }
        toastr(trans('Dashboard/toastr.succes'));
        return $order;
        }
}
