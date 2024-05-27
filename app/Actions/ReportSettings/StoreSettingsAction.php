<?php
namespace App\Actions\ReportSettings;

use App\Helper\ImageHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use App\Models\Report\ReportSettings;


class StoreSettingsAction
{
    use ImageHelper; 
    public function handle(array $data)
    {
        // dd($data['key']);
        if(ReportSettings::where('key', $data['key'])->Where('value', $data['value'])->exists()){
            return redirect()->back()->withErrors($data['key'].' '.trans('Dashboard/user.exists'));
        }else{ 
       $settings = ReportSettings::create(Arr::except($data,['image']));
        toastr(trans('Dashboard/toastr.succes'));
          // storing images
          if ( isset( $data[ 'image' ] ) ) {
                $this->StoreImage($data[ 'image' ] , $settings, $data[ 'key' ] );
          }
        return $settings;
        }
    }
}
