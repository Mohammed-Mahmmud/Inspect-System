<?php

namespace App\ViewModels\Dashboard\TubsView;

use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tubs\Tubs;
use App\Models\TranslationKey;
use Illuminate\Support\Facades\Route;
use Spatie\ViewModels\ViewModel;

class TubsViewModel extends ViewModel
{
    public $tubs;
    public $type;
    public $examType;
    public  $translation;

    public function __construct($examType = null, $tubs = null)
    {
        $this->tubs = is_null($tubs) ? new Tubs(old()) : $tubs;
        $this->type = is_null($tubs) ? 'Create' : 'Edit';
        $this->examType = is_null($examType) ?  $tubs->type : $examType;
        $this->translation = TranslationKey::get();
    }

    public function action(): string
    {
        return is_null($this->tubs->id) || Route::currentRouteName() === 'tubs.reports.repeat'
            ? route('tubs.reports.store')
            : route('tubs.reports.update', $this->tubs->id);
    }

    public function method(): string
    {
        return is_null($this->tubs->id) || Route::currentRouteName() === 'tubs.reports.repeat'
            ? 'POST' : 'PUT';
    }

    public function orders()
    {
        return Order::get();
    }

    public function accept()
    {
        return Accept::get();
    }
}
