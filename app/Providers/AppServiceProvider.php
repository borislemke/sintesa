<?php

namespace App\Providers;

use App\Http\Controllers\NavigationController;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $navigation = new NavigationController();
        $navigation = $navigation->build(1);
        view()->share(compact('navigation'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
