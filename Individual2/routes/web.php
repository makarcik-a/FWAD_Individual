<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuySubscriptionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [SubscriptionController::class, 'index']);
Route::post('/', [SubscriptionController::class, 'filter']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/account', [AccountController::class, 'index'])->middleware('auth')->name('account');
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::middleware(['auth', 'admin'])->group(function () {
     // Маршрут для отображения формы добавления подписки
     Route::get('/admin/add_subscription', [AdminController::class, 'addSubscription'])->name('admin.add_subscription');

     // Маршрут для обработки данных из формы добавления подписки
     Route::post('/admin/add_subscription', [AdminController::class, 'storeSubscription'])->name('admin.store_subscription');
    
    
    // Route to display the edit subscription form
Route::get('/admin/edit_subscription/{id}', [AdminController::class, 'editSubscription'])->name('admin.edit_subscription');

// Route to handle the form submission for updating subscription
Route::put('/admin/edit_subscription/{id}', [AdminController::class, 'updateSubscription'])->name('admin.update_subscription');


Route::get('/admin/view_subscriptions', [AdminController::class, 'viewSubscriptions'])->name('admin.view_subscriptions');

    Route::get('/admin/logout', [AdminController::class, 'logout']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/buy_subscription', [BuySubscriptionController::class, 'showPurchasePage'])->name('buySubscription');
    Route::post('/purchase_subscription/{id}', [BuySubscriptionController::class, 'purchase'])->name('purchaseSubscription');
});


