<?php

namespace App\billing;

interface PaymentGatewayContract
{
    public function setDiscount(int $amount);

    public function charge(int $amount);
}