<?php

namespace App\Providers;

use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Billing\BankPaymentGateway;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentGatewayContract::class, function ($app) {

            if (request()->get("credit")) {
                return new CreditPaymentGateway('USD');
            }

            return new BankPaymentGateway('ZIG');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
