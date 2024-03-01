<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TopupController;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductOrderController;

use App\Http\Controllers\AdvertisementController;

use App\Http\Controllers\RerollController;
use App\Http\Controllers\RerollSoldController;
use App\Http\Controllers\ServiceController;
use App\Models\ProductOrder;

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
// Navigation user

Route::get('/' , [NavigationController::class , 'index'])->name('home');
Route::get('/topup', [NavigationController::class, 'topup'])->name('topup');

Route::get('/advertisement' , [NavigationController::class , 'advertisement'])->name('advertisement');
Route::get('/topup/{id}', [TopupController::class, 'topup_details'])->name('topup.details');
Route::get('/advertisement/{id}', [NavigationController::class, 'advertisement_details'])->name('advertisement.details');

Route::get('/reroll/{id}', [NavigationController::class, 'reroll_details'])->name('reroll.details');
Route::get('/reroll' , [NavigationController::class , 'reroll'])->name('reroll');

Route::resource('user', UserController::class);

Route::post('user/confirm', [UserController::class, 'confirmation'])->name('user.confirmation');
Route::post('user/confirm/resend', [UserController::class, 'resendConfirmationCode'])->name('user.confirmation.resend');

Route::post('user/login', [UserController::class, 'login'])->name('user.login');
Route::post('user/logout', [UserController::class, 'logout'])->name('user.logout');

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


    // advertisemnt dashboard 
    Route::get('dashboard/advertisement/soft_delete', [AdvertisementController::class , 'soft_delete'])->name('dashboard.advertisement.soft_delete');
    
    Route::resource('dashboard/advertisement' , AdvertisementController::class)->names('dashboard.advertisement');

    Route::delete('dashboard/advertisement/delete/{id}' , [AdvertisementController::class , 'delete'])->name('advertisement.delete');
    Route::patch('dashboard/advertisement/restore/{id}' , [AdvertisementController::class , 'restore'])->name('advertisement.restore');

    // reroll dashboard:
    Route::get('dashboard/reroll/soft-delete', [RerollController::class, 'soft_delete'])->name('reroll.soft_delete');
    Route::resource('dashboard/reroll', RerollController::class)->names('dashboard.reroll');
    Route::delete('dashboard/reroll/delete/{id}', [RerollController::class, 'delete'])->name('reroll.delete');
    Route::patch('dashboard/reroll/restore/{id}', [RerollController::class, 'restore'])->name('reroll.restore');

    // reroll dashboard:
    Route::resource('dashboard/rerollsold', RerollSoldController::class)->names('dashboard.rerollsold');


    Route::get('dashboard/rerollsold/new/{reroll}', [RerollSoldController::class, 'newSold'])->name('dashboard.rerollsold.new');


    // services dashboard:
    Route::get('dashboard/service/soft-delete', [ServiceController::class, 'soft_delete'])->name('service.soft_delete');
    Route::resource('dashboard/service', ServiceController::class)->names('dashboard.service');
    Route::delete('dashboard/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');
    Route::patch('dashboard/service/restore/{id}', [ServiceController::class, 'restore'])->name('service.restore');


});


// TOPUP:


// Cart:

Route::resource('cart', CartController::class)->names('cart');

// Product-Order:

Route::resource('product-order', ProductOrderController::class)->names('product.order');


Route::resource('order' , OrderController::class);

