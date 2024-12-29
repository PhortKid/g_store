<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersManagementController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\MyProfileController;




use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\DashboardController;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/dash/profile', [MyProfileController::class,'index'])->name('myprofile.index');
    Route::put('/dash/profile/{id}', [MyProfileController::class,'store'])->name('myprofile.store');
    Route::put('/dash/profile/email/{id}', [MyProfileController::class,'update_email'])->name('myprofile.update_email');
    Route::put('/dash/profile/password/{id}', [MyProfileController::class,'password'])->name('myprofile.password');

    Route::resource('/dash/',DashboardController::class);
    Route::resource('product_types', ProductTypeController::class);
    Route::resource('products', ProductController::class);
    Route::resource('sales', SaleController::class);

    Route::get('/approved_sales', [SaleController::class,'approved'])->name('zilizouzwa');
    
    Route::get('/product_report', [ProductController::class,'product_report'])->name('product.report');
    
    Route::get('/', function () {
        return redirect('/dash/');
    });
    Route::resource('dash/users_management',UsersManagementController::class);


});

Route::get('/sample',function(){
    return view('dashboard.index');
});

Route::get('/soon',function(){
    return "Contact System admin";
})->name('soon');

require __DIR__.'/auth.php';
