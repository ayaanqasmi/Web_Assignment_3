<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return response()->json(['message' => 'This is a small test message!']);
});