<?php

namespace App\ViewModels\Dashboard\TubsView;


use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tubs\Summary;
use App\Models\TranslationKey;
use Illuminate\Support\Facades\Route;
use Spatie\ViewModels\ViewModel;

class SummaryViewModel extends ViewModel
{
    public $data;
    public $type;
    public $examType;
    public $translation;

    public function __construct($examType = null, $data = null)
    {
        $this->data = is_null($data) ? new Summary(old()) : $data;
        $this->type = is_null($data) ? 'Create' : 'Edit';
        $this->examType = is_null($examType) ?  $data->type : $examType;
        $this->translation = TranslationKey::get();
    }

    public function action(): string
    {
        return is_null($this->data->id) || Route::currentRouteName() === 'tubs.summary.repeat'
            ? route('tubs.summary.store')
            : route('tubs.summary.update', $this->data->id);
    }

    public function method(): string
    {
        return is_null($this->data->id) || Route::currentRouteName() === 'tubs.summary.repeat'
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
