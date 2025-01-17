<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    // auth()->loginUsingId(1);
    return $request->user();
})->middleware('auth:sanctum');
