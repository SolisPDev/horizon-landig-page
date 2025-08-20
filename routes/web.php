<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\PageVisitController;

Route::get('/', function () {
    return view('landing');
});

Route::post('/subscribe', [SubscriberController::class, 'store']);

Route::post('/record-visit', [PageVisitController::class, 'recordVisit']);