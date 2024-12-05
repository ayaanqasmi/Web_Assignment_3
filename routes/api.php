<?php

// use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// Route::resource('users','UserController');

// Route::get('/testimonials', [TestimonialController::class, 'index']);
// Route::post('/testimonials', [TestimonialController::class, 'store']);
// Route::get('/testimonials/{id}', [TestimonialController::class, 'show']);
// Route::put('/testimonials/{id}', [TestimonialController::class, 'update']);
// Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy']);


// Route::resource('tutorials','TutorialController');
// Route::resource('services','ServiceController');

Route::get('/hello', function () {
    return response()->json(['message' => 'This is a small test message!']);
});