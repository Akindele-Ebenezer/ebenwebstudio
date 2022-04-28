<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MailController;
 
Route::get('/', [ProjectController::class, 'index']);   
 
Route::post('/mail', [MailController::class, 'mail']);
