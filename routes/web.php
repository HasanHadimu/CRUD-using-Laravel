<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\ShowController;


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


// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/UploadPage', [UploadDataController::class, 'index']);

Route::post('/UploadData', [UploadDataController::class, 'store']);

Route::get('/', [ShowController::class, 'show']);

Route::get('/editpage/{id}', [UploadDataController::class, 'editpage']);

Route::post('/update/{id}', [UploadDataController::class, 'update']);

Route::get('/delete/{id}', [ShowController::class, 'delete']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
});
