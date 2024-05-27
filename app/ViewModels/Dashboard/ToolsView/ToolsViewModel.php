<?php

namespace App\ViewModels\Dashboard\ToolsView;

use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tools\Tools;
use Illuminate\Support\Facades\Route;
use Spatie\ViewModels\ViewModel;

class ToolsViewModel extends ViewModel {
    public $tools;
    public $type;
    public $examType;

    public function __construct( $examType = null, $tools = null ) {
        $this->tools = is_null( $tools ) ? new Tools( old() ) : $tools;
        $this->type = is_null( $tools ) ? 'Create' : 'Edit';
        $this->examType = is_null( $examType )?  $tools->type : $examType;
    }

    public function action(): string {
        return is_null( $this->tools->id ) || Route::currentRouteName() === 'tools.reports.repeat'
        ? route( 'tools.reports.store' )
        : route( 'tools.reports.update', $this->tools->id );
    }

    public function method(): string {
        return is_null( $this->tools->id )  || Route::currentRouteName() === 'tools.reports.repeat'
         ? 'POST' : 'PUT';
    }

    public function orders() {
        return Order::get() ;
    }

    public function accept() {
        return Accept::get() ;
    }
}