<?php

namespace App\ViewModels\Dashboard\TublarSummary;

use Spatie\ViewModels\ViewModel;
use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\TublarSummary\TublarSummary;

class SummaryViewModel extends ViewModel {
    public $summary;
    public $type;
    public $examType;

    public function __construct( $examType = null, $summary = null ) {
        $this->summary = is_null( $summary ) ? new TublarSummary( old() ) : $summary;
        $this->type = is_null( $summary ) ? 'Create' : 'Edit';
        $this->examType = is_null( $examType )?  $summary->type : $examType;
    }

    public function action(): string {
        return is_null( $this->summary->id )
        ? route( 'tools-summary.store' )
        : route( 'tools-summary.update', $this->summary->id );
    }

    public function method(): string {
        return is_null( $this->summary->id ) ? 'POST' : 'PUT';
    }

    public function orders() {
        return Order::get() ;
    }

    public function accept() {
        return Accept::get() ;
    }
}
