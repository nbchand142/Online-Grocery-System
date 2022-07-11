<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customer_listController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/home",[customer_listController::class,"customer"])->name('homepage');
//Route::get("/view/{id}",[customer_listController::class,"singal_listing"])->name('single');
//Route::get("/business/add",[customer_listController::class,"add_business"])->name('add_new');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
