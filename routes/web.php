<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\UsersDataController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\EthController;

use App\Http\Controllers\UserDashboardController;

use App\Http\Controllers\UserApplication;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('public.home');
});

Route::get('/guage', function () {
    return view('public.guage');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        if(auth() -> user() -> role === 'admin'){
            // return auth() -> user() -> role;
            return Redirect('/admin');
        }
        return Redirect('/user');
    })->name('dashboard');

    Route::prefix('user') -> group(function () {
        Route::get('/', [UserDashboardController::class, 'index']);
        Route::resource('/user/applications', ApplicationsController::class);
    });

    Route::prefix('admin') -> middleware(['isAdmin']) -> group(function () {
        Route::get('/', [AdminDashboardController::class, 'index']);
        Route::resource('/applications', ApplicationsController::class);
        Route::get('/users', [UsersDataController::class, 'index']);
    });
    
});


Route::prefix('api') -> group(function (){
    Route::get('/createid', [EthController::class, 'createID']);
    
    Route::get('/applications/update', [ApplicationsController::class, 'update']);
    Route::get('/applications/reject', [ApplicationsController::class, 'reject']);
    
    Route::get('/applications/find/{id}', [ApplicationsController::class, 'find']);

    Route::get('/wallet/create', [EthController::class, 'createWallet']);

    Route::get('/applications/create', [UserApplication::class, 'create']);
});
