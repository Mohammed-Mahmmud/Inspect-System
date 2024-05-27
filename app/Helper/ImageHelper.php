<?php
namespace App\Helper;

use App\Models\Dashboard\Image;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

trait ImageHelper
 {
    public function StoreImage( $data, $model, $nameImage )
 {

        if ( !empty( $data ) ) {
            $model->addMedia( $data )->toMediaCollection( $nameImage );
        }
    }
    //If No multi images

    public function UpdateImage( $data, $model, $nameImage ) {
        if ( !empty( $data ) ) {
            $model->clearMediaCollection( $nameImage );
            $model->addMedia( $data )->toMediaCollection( $nameImage );
        }
    }

    public function DeleteImage( $model, $nameImage )
 {
        $model->clearMediaCollection( $nameImage );
    }
}
