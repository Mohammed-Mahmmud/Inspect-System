<?php

namespace App\Providers;

use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tools\Tools;
use App\Models\media;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::MorphMap([
            'Tools' => Tools::class,
            'media' => media::class,
            'User' => User::class,
            'Order' => Order::class,
            'Mpi' => Mpi::class,

        ]);
    }
}
