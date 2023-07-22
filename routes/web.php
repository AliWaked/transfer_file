<?php

use App\Http\Controllers\UploadFilesController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('home');
Route::view('/download', 'download')->name('download');
Route::get('/files/{file:identifier}', [UploadFilesController::class, 'show'])->name('file.show');
Route::get('/download/{file:identifier}', [UploadFilesController::class, 'download'])->name('file.download');
Route::post('/uploads', [UploadFilesController::class, 'store'])->name('file.upload');