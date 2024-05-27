<?php
namespace App\Actions\ReportSettings;
use App\Helper\ImageHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use App\Models\Report\ReportSettings;


class UpdateSettingsAction
{
    use ImageHelper;
    public function handle(ReportSettings $reportSettings ,array $data)
    {
        $reportSettings->update(Arr::except($data,['image']));
        // storing images
        if ( isset( $data[ 'image' ] ) ) {
            $this->UpdateImage($data[ 'image' ] , $reportSettings, $data[ 'key' ] );
      }
      toastr( trans( 'Dashboard/toastr.info' ), 'info', trans( 'Dashboard/toastr.updated' ) );
      return $reportSettings;
        }
}
