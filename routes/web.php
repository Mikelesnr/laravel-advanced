<?php

use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\DeliveryService;
use App\Parcel;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pay', [PayOrderController::class, 'store']);

Route::get('parcel', function (DeliveryService $deliveryService) {

    $deliveryService->send(
        'Book',
        'medium',
        'Welcome to Laravel Advanced Topics course','ivhuourpride@gmail.com'
    );

});

Route::get('facade',function () {
    Parcel::send('Book','medium','Welcome to Laravel Advanced Topics course','ngobran23@gmail.com');
});

Route::get('/', [PageController::class, 'index']);
