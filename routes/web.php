<?php

use App\Http\Livewire\HomepageLivewire;
use App\Http\Livewire\SingleProductLivewire;
use App\Http\Livewire\CategoriesLivewire;
use App\Http\Livewire\CartLivewire;
use App\Http\Livewire\SearchLivewire;
use App\Http\Livewire\OrderLivewire;
use App\Http\Livewire\CheckoutLivewire;
use App\Http\Livewire\AdminOrderLivewire;
use App\Http\Livewire\AdminOrderEditLivewire;
use App\Http\Livewire\AdminProductLivewire;

use App\Http\Livewire\AdminProductEditLivewire;
use App\Http\Livewire\AdminProductAddLivewire;
use App\Http\Livewire\AdminUserLivewire;
use App\Http\Livewire\AdminUserEditLivewire;


use Illuminate\Support\Facades\Route;

Route::get('/',HomepageLivewire::class);
Route::get('/product/{product_id}',SingleProductLivewire::class);
Route::get('/categories/{category_id}',CategoriesLivewire::class);
Route::get('/cart',CartLivewire::class);
Route::get('/search/{keyword}',SearchLivewire::class);
Route::get('/my-orders',OrderLivewire::class);
Route::get('/chekout',CheckoutLivewire::class);
Route::get('/admin/order/',AdminOrderLivewire::class);
Route::get('/admin/order/edit/{order_id}',AdminOrderEditLivewire::class);
Route::get('/admin/products',AdminProductLivewire::class)->name('admin.products');
Route::get('/admin/product/edit{product_id}',AdminProductEditLivewire::class);
Route::get('/admin/product/add',AdminProductAddLivewire::class);
Route::get('/admin/users',AdminUserLivewire::class)->name('admin.users');
Route::get('/admin/user/edit{user_id}',AdminUserEditLivewire::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
