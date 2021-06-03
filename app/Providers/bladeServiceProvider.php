<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class bladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     Blade::if('impersonate', function(){
        if(session()->get('impersonate')){
            return true;
        }
        return false;
     });
    }
}
