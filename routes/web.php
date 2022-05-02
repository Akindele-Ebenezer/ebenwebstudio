<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MailController;
 
Route::get('/', [ProjectController::class, 'index']);   
 
Route::post('/mail', [MailController::class, 'mail']);

Route::get('/create_new_row', [ProjectController::class, 'create_new_row']);

Route::get('/delete_row', [ProjectController::class, 'delete_row']);
