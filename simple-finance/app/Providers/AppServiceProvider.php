<?php

namespace App\Providers;

use App\Models\Item;
use App\Models\User;
use App\Observers\ItemObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Item::observe(ItemObserver::class);
        User::observe(UserObserver::class);
        View::share('tokenJS', Str::random(30));
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
