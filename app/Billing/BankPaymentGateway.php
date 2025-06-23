<?php

namespace App\Billing;

use Illuminate\Support\Str;
use App\Billing\PaymentGatewayContract;

class BankPaymentGateway implements PaymentGatewayContract
{
    public function __construct(
        private string $currency,
        private int $discount = 0,
    ){}

    public function setDiscount(int $amount)
    {
        $this->discount = $amount;
    }

    public function charge(int $amount)
    {
        // charge bank
        
        return [
            'amount'=> $amount -$this->discount,
            'confirmation_number'=> Str::random(),
            'currency'=> $this->currency,
            'discount'=> $this->discount, 
        ];
    }

}