<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    public function __construct(
        private PaymentGatewayContract $paymentGateway
    ){}

    public function get(): array
    {
        $this->paymentGateway->setDiscount(600);

        return[
            'name'=>'Mike',
            'address'=>'3 Alexander Road',
        ];
    }
}