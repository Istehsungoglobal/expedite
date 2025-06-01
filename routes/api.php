<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\StateFeeController;
use App\Http\Controllers\Select2Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('ip-info', function (Request $request) {
    return Http::get('https://ipwho.is')->json();
})->name('ip-info');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Select2 AJAX endpoints
Route::prefix('select2')->name('api.select2.')->group(function () {
    Route::post('/permissions', [Select2Controller::class, 'permissions'])->name('permissions');
    Route::post('/roles', [Select2Controller::class, 'roles'])->name('roles');
    Route::post('countries', [Select2Controller::class, 'countries'])->name('countries');
});

/*
|--------------------------------------------------------------------------
| State Fees API Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('state-fees', StateFeeController::class);
    Route::apiResource('categories', CategoryController::class);
});
