<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Carbon\Carbon;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $age = Carbon::createFromDate(1997, 10, 7)->age;
        View::share('age', $age);
        View::share('key', 'value');

       // View::share("auth", Auth::user());
      
        View::composer('*', function($view){
            $view->with("auth", Auth::user());
        });
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
