<?php

use Illuminate\Support\Facades\Route;
use VendorName\LaravelSkeletonLibrary\Http\Controllers\SkeletonController;

Route::get('/example-route', [SkeletonController::class,'index']);