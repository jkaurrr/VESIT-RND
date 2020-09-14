<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Collection;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Collection::macro('selfIntersect', function () {
            return $this->reduce(function ($intersection, $items) {
                $intersection = $intersection ?? collect($items);
                return $intersection->intersect($items);
            }, null);
        });
    }
}
