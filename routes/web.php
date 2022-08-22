<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\validateForm;
use App\Http\Controllers\fetchFromDB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
	return view('welcome');
});

*/


Route::get('/', [fetchFromDB::class, 'fetchFromDB']);
Route::get('/paste/{id}', [fetchFromDB::class, 'fetchIfPasteExist']);
Route::post('paste/create', [validateForm::class, 'validatePastes']);
