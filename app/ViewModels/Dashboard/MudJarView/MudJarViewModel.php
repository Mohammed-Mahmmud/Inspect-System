<?php

namespace App\ViewModels\Dashboard\MudJarView;

use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\MudJar\MudJar;
use Illuminate\Support\Facades\Route;
use Spatie\ViewModels\ViewModel;

class MudJarViewModel extends ViewModel
{
        public $mudjar;
    public $type;
    public $examType;

    public function __construct( $examType = null, $mudjar = null ) {
        $this->mudjar = is_null( $mudjar ) ? new MudJar( old() ) : $mudjar;
        $this->type = is_null( $mudjar ) ? 'Create' : 'Edit';
        $this->examType = is_null( $examType )?  $mudjar->type : $examType;
    }

    public function action(): string {
        return is_null( $this->mudjar->id ) || Route::currentRouteName() === 'mud-jar.reports.repeat'
            ? route( 'mud-jar.reports.store' )
            : route(  'mud-jar.reports.update', $this->mudjar->id );
    }

    public function method(): string {
        return is_null( $this->mudjar->id ) || Route::currentRouteName() === 'mud-jar.reports.repeat'
        ? 'POST' : 'PUT';
    }

    public function orders() {
        return Order::get() ;
    }
    public function accept() {
        return Accept::get() ;
    }

}