<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserType;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\carsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\ModelsController;

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


//car
Route::group([
    'prefix' => 'admin/cars',
    'as' => 'admin.cars.',
    'middleware'=>'auth',
    //'password.confirm','user.type:admin,brands'
], function() {
    Route::get('/', [carsController::class,'index'])->name('index');
    Route::get('/store', [carsController::class,'create'])->name('create');
    Route::get('/{id}', [carsController::class,'show'])->name('show');
    Route::post('/', [carsController::class, 'store'])->name('store');
    Route::get('/{id}/edit',[carsController::class, 'edit'])->name('edit');
    Route::put('/{id}', [carsController::class, 'update'])->name('update');
    Route::delete('/{id}', [carsController::class, 'destroy'])->name('destroy');
});



//model
Route::group([
    'prefix' => 'admin/models',
    'as' => 'admin.models.',
    'middleware'=>'auth',
], function() {
    Route::get('/', [ModelsController::class,'index'])->name('index');
    Route::get('/store', [ModelsController::class,'create'])->name('create');
    Route::get('/{id}', [ModelsController::class,'show'])->name('show');
    Route::post('/', [ModelsController::class, 'store'])->name('store');
    Route::get('/{id}/edit',[ModelsController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ModelsController::class, 'update'])->name('update');
    Route::delete('/{id}', [ModelsController::class, 'destroy'])->name('destroy');
});


//brands
Route::group([
    'prefix' => 'admin/brands',
    'as' => 'admin.brands.',
  
], function() {
    Route::get('/', [BrandsController::class,'index'])->name('index');
    Route::get('/store', [BrandsController::class,'create'])->name('create');
    Route::get('/{id}', [BrandsController::class,'show'])->name('show');
    Route::post('/', [BrandsController::class, 'store'])->name('store');
    Route::get('/{id}/edit',[BrandsController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BrandsController::class, 'update'])->name('update');
    Route::delete('/{id}', [BrandsController::class, 'destroy'])->name('destroy');
});



//front
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/vehiculs3',[HomeController::class,'vehiculs3'])->name('vehiculs3');
Route::get('/vehiculs',[HomeController::class,'vehiculs'])->name('vehiculs');
Route::get('/vehicul',[HomeController::class,'vehicul'])->name('vehicul');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');




Route::get('admin/tags/{id}/models', [TagsController::class, 'models']);
Route::get('admin/users/{id}', [UsersController::class, 'show'])->name('admin.users.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');



require __DIR__.'/auth.php';
