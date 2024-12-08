<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Tutorial;

Route::get('/services', function () {
    $services = Service::all(); 
    $tutorials = Tutorial::all(); 
    $auth=true;//conditionally render forms for CRUD
    return view('pages.services',['services'=>$services,'tutorials'=>$tutorials,'auth'=>$auth]);
});
Route::get('/about', function () {
    $testimonials=Testimonial::all();
    $auth=true;
    return view('pages.about',['testimonials'=>$testimonials,'auth'=>$auth]);
    
});
Route::get('/contact', function () {
    return view('pages.contact');
    
});
Route::get('/', function () {
    return view('pages.home');
    
});
use App\Http\Controllers\TestimonialController;

Route::prefix('api/testimonials')->group(function () {
    Route::get('/', [TestimonialController::class, 'index']);            
    Route::post('/', [TestimonialController::class, 'store']);           
    Route::get('{id}', [TestimonialController::class, 'show']);          
    Route::put('{id}', [TestimonialController::class, 'update']);        
    Route::delete('{id}', [TestimonialController::class, 'destroy']);    
});

use App\Http\Controllers\ServiceController;
Route::prefix('api/services')->group(function () {
    Route::get('/', [ServiceController::class, 'index']);            
    Route::post('/', [ServiceController::class, 'store']);           
    Route::get('{id}', [ServiceController::class, 'show']);          
    Route::put('{id}', [ServiceController::class, 'update']);        
    Route::delete('{id}', [ServiceController::class, 'destroy']);    
});

use App\Http\Controllers\TutorialController;
Route::prefix('api/tutorials')->group(function () {
    Route::get('/', [TutorialController::class, 'index']);            
    Route::post('/', [TutorialController::class, 'store']);           
    Route::get('{id}', [TutorialController::class, 'show']);          
    Route::put('{id}', [TutorialController::class, 'update']);        
    Route::delete('{id}', [TutorialController::class, 'destroy']);    
});