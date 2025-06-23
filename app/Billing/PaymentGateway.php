<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    public function __construct(
        private string $currency
    ){}

    public function charge(int $amount)
    {
        // charge bank
        
        return [
            'amount'=> $amount,
            'confirmation_number'=> Str::random(),
            'currency'=> $this->currency, 
        ];
    }

}