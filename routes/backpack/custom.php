<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('users', 'UserCrudController');
    Route::crud('roles', 'RoleCrudController');
    Route::crud('permissions', 'PermissionCrudController');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Orders
    Route::crud('orders', 'OrderCrudController');

    // Lists
    Route::crud('postal-codes', 'PostalCodeCrudController');
    Route::crud('one-off-orders', 'OneOffOrdersCrudController');
    Route::crud('ice-orders', 'IceOrdersCrudController');
    Route::crud('variables', 'VariablesCrudController');
    Route::crud('customers', 'CustomersCrudController');
    Route::crud('log-files', 'LogFilesCrudController');

    // Reports
    Route::get('inventory', function () {
        return view('vendor.backpack.base.inventory');
    });

    Route::get('warehouse-sales', function () {
        return view('vendor.backpack.base.warehouse_sales');
    });

    //Others
    Route::get('manual-payments', function () {
        return view('vendor.backpack.base.manual_payments');
    })->name('manual-payments');

    Route::get('emails', function () {
        return view('vendor.backpack.base.emails');
    })->name('emails');
    Route::crud('manual-payments', 'ManualPaymentCrudController');
    Route::crud('emails', 'EmailCrudController');
    Route::crud('warehouse-sale', 'WarehouseSaleCrudController');
    Route::crud('inventory', 'InventoryCrudController');
});