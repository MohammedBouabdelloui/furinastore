<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TopupController;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
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

Route::get('/', function (Request $request) {
    $ip = $request->ip();
    $position = Location::get('41.87.159.255');
    notify()->success('فورينا ترحب بك في متجرها ⚡️', 'أهلا بك معنا');
    return view('index' ,compact('position'));
});

Route::resource('user', UserController::class);

Route::post('user/confirm', [UserController::class, 'confirmation'])->name('user.confirmation');
Route::post('user/confirm/resend', [UserController::class, 'resendConfirmationCode'])->name('user.confirmation.resend');

Route::post('user/login', [UserController::class, 'login'])->name('user.login');

Route::get('auth/google/callback' , [UserController::class , 'handleGoogleCallback' ] );
Route::get('auth/google' , [UserController::class , 'redirectToGoogle']);


Route::middleware(['admin'])->group(function(){
    Route::get('/dashboard' , [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/users' , [DashboardController::class , 'users'])->name('dashboard/product');

    // topup dashboard:
    Route::resource('dashboard/topup', TopupController::class)->names('dashboard.topup');
    Route::get('dashboard/topup/soft-delete', [TopupController::class, 'showSoftDeleted'])->name('topup.soft_delete');
    Route::delete('dashboard/topup/soft-delete/{id}', [TopupController::class, 'softDelete'])->name('topup.soft-delete');
    Route::patch('dashboard/topup/restore/{id}', [TopupController::class, 'restore'])->name('topup.restore');

});


// TOPUP:

Route::get('/topup', function (Request $request) {
    $ip = $request->ip();
    $position = Location::get('41.87.159.255');
    return view('topup.show' ,compact('position'));
});

