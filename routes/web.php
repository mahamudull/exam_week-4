<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

 Route::get('/index', function () {
    return view('show');
 });


Route::resource('contacts', ContactController::class);
