<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/version', function () {
    return view('version');;
});

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);
Route::post('auth/me', [AuthController::class, 'me']);


// Route::get('/getUser', [UsersController::class, 'getUser'])->middleware([\App\Http\Middleware\AuthMiddleware::class]) ;
// Route::middleware([\App\Http\Middleware\AuthMiddleware::class])->group(function () {
//     Route::get('/getUser', [UsersController::class, 'getUser']);
// });

Route::middleware('AuthPeter')->group(function () {
    Route::get('/getUser', [UsersController::class, 'getUser']);
});


