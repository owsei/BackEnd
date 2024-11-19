<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AuthMiddleware;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/version', function () {
    return view('version');;
});

// Route::get('/getUser', [UsersController::class, 'getUser'])->middleware([\App\Http\Middleware\AuthMiddleware::class]) ;


// Route::middleware([\App\Http\Middleware\AuthMiddleware::class])->group(function () {
//     Route::get('/getUser', [UsersController::class, 'getUser']);
// });

Route::middleware('AuthPeter')->group(function () {
    Route::get('/getUser', [UsersController::class, 'getUser']);
});



