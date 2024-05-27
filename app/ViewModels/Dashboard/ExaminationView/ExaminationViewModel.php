<?php

namespace App\ViewModels\Dashboard\ExaminationView;

use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Lifting\Examination;
use Illuminate\Support\Facades\Route;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Lifting\ShakleSize;
use Spatie\ViewModels\ViewModel;

class ExaminationViewModel extends ViewModel {
    public $examination;
    public $type;
    public $examType;

    public function __construct( $examType = null, $examination = null ) {
        $this->examination = is_null( $examination ) ? new Examination( old() ) : $examination;
        $this->type = is_null( $examination ) ? 'Create' : 'Edit';
        $this->examType = is_null( $examType )?  $examination->type : $examType;
    }

    public function action(): string {
        return is_null( $this->examination->id ) ||Route::currentRouteName() === 'examination.reports.repeat'
        ? route( 'examination.reports.store' )
        : route( 'examination.reports.update', $this->examination->id );
    }

    public function method(): string {
        return is_null( $this->examination->id ) ||Route::currentRouteName() === 'examination.reports.repeat'
            ? 'POST' : 'PUT';
    }

    public function orders() {
        return Order::get() ;
    }

    public function accept() {
        return Accept::get() ;
    }
    public function shakleSizes() {
        return ShakleSize::get() ;
    }
}
