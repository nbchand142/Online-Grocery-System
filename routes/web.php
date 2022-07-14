<?php

use App\Http\Livewire\HomepageLivewire;
use App\Http\Livewire\SingleProductLivewire;
use Illuminate\Support\Facades\Route;

Route::get('/',HomepageLivewire::class);
Route::get('/product/{product_id}',SingleProductLivewire::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
