<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteCustomizationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['set_tenant_schema'])->group(function () {
    Route::get('/settings', [SettingController::class, 'index']);
    Route::post('/settings', [SettingController::class, 'store']);
    Route::put('/settings/{id}', [SettingController::class, 'update']);
    Route::get('/customization', [SiteCustomizationController::class, 'getCustomization']);
    Route::post('/customization', [SiteCustomizationController::class, 'updateCustomization']);

});

Route::middleware('auth')->group(function () {
    Route::get('/settings', function () {
        return view('livewire.customization');
    })->name('settings');
});