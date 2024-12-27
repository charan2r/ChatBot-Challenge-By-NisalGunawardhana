<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;

Route::get('/', function () {
    return view('index');
});

Route::post('/admin/chat-response', [ChatbotController::class, 'getChatResponse']);
