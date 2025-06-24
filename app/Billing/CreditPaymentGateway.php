<?php

namespace App\Billing;

use Illuminate\Support\Str;
use App\Billing\PaymentGatewayContract;

class CreditPaymentGateway implements PaymentGatewayContract
{
    public function __construct(
        private string $currency,
        private int $discount = 0,
    ) {
    }

    public function setDiscount(int $amount)
    {
        $this->discount = $amount;
    }

    public function charge(int $amount)
    {
        // charge bank

        $amount = $amount - $this->discount;
        $fees = $amount * 0.02;


        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees,
        ];
    }

}
