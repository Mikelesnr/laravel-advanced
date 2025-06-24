<?php

namespace App;

use Illuminate\Support\Facades\Mail;

class DeliveryService
{
    public function __construct(
        private string $country,
        private string $type,
    ) {
    }

    public function send(string $parcelName, string $size, string $textMessage, string $email)
    {
        //Handle parcel sending with $parcelName and $size

        Mail::raw($textMessage, function ($message) use ($email) {
            $message->to($email);
        });

        dump('Parcel was sent with the  message: ' . $textMessage);
    }
}
