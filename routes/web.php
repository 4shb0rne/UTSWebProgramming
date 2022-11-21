<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BookController::class, 'showbook']);
Route::get('/bookdetail/{id}', [BookController::class, 'openbookdetail']);
Route::get('/filterbook/{id}', [BookCategoryController::class, 'filterbook']);
Route::get('/publisher', [PublisherController::class, 'openpublisher']);
Route::get('/publisherdetail/{id}', [PublisherController::class, 'publisherdetail']);
Route::get('/contactus', [BookController::class, 'opencontactus']);
