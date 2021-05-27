<?php

use App\Models\Delivery;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Product\Checkout;
use App\Http\Livewire\Size\SizeSection;
use App\Http\Livewire\Order\ManageOrder;
use App\Http\Livewire\Color\ColorSection;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CustomerController;
use App\Http\Livewire\Product\ProductDisplay;
use App\Http\Livewire\Product\ProductSection;
use App\Http\Livewire\Category\CategorySection;
use App\Http\Livewire\Delivery\DeliverySection;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/size', SizeSection::class)->name('size');

        Route::get('/color', ColorSection::class)->name('color');

        Route::get('/category', CategorySection::class)->name('category');
        Route::get('/products', ProductSection::class)->name('product');
        Route::get('/checkout', Checkout::class)->name('checkout');
        Route::get('/customers', [CustomerController::class, 'index'])->name(
            'customer.view'
        );

        Route::get('/delivery', DeliverySection::class)->name('delivery');
        Route::get('/voucher/{order}', [
            VoucherController::class,
            'show',
        ])->name('voucher');

        Route::get('/orders/manage', ManageOrder::class)->name('order.manage');
    });
Route::get('/showroom', ProductDisplay::class)->name('product.display');

Route::middleware(['auth', 'second'])->group(function () {});

require __DIR__ . '/auth.php';
