<?php

namespace App\Providers;


use App\Models\Cart;
use Akaunting\Money\Money;
use Laravel\Cashier\Cashier;
use Akaunting\Money\Currency;

use Illuminate\Support\Facades\View;
use Money\Curriencies\ISOCurrencies;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Money\Formatter\IntlMoneyFormatter;

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
        View::composer('*', function($view){
            $view->with('cart', Cart::bySession()->first());
        });

       
    }
}
