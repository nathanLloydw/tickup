<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BarsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () 
{
    return Inertia::render('Welcome', 
    [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () 
{
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('users',[UsersController::class,'index'])->name('users');

Route::middleware(['auth:sanctum', 'verified'])->get('products',[ProductsController::class,'index'])->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('events',[EventsController::class,'index'])->name('events');

Route::middleware(['auth:sanctum', 'verified'])->get('event/{id}',[EventsController::class,'event'])->name('event');

Route::middleware(['auth:sanctum', 'verified'])->get('bar/{id}/products',[BarsController::class,'product_list'])->name('bars/products');

Route::middleware(['auth:sanctum', 'verified'])->get('event/{id}/products',[EventsController::class,'product_list'])->name('event/products');

Route::middleware(['auth:sanctum', 'verified'])->get('event/{id}/tickets',[EventsController::class,'ticket_list'])->name('event/tickets');

Route::middleware(['auth:sanctum', 'verified'])->get('event/{id}/bars',[EventsController::class,'bar_list'])->name('event/bars');

Route::middleware(['auth:sanctum', 'verified'])->get('event/{id}/orders',[EventsController::class,'order_list'])->name('event/orders');

Route::middleware(['auth:sanctum', 'verified'])->get('events/create', [EventsController::class,'create'])->name('events/create');

Route::middleware(['auth:sanctum', 'verified'])->get('users/create', [UsersController::class,'create'])->name('users/create');

Route::middleware(['auth:sanctum', 'verified'])->prefix('/event')->group(function ()
{
    Route::post('/store', [EventsController::class,'store']);
    Route::put('/{id}', [EventsController::class,'update']);
    Route::delete('/{id}', [EventsController::class,'destroy']);
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('/user')->group(function ()
{
    Route::post('/store', [UsersController::class,'store']);
    Route::put('/{id}', [UsersController::class,'update']);
    Route::delete('/{id}', [UsersController::class,'destroy']);
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('/product')->group(function ()
{
    Route::post('/store', [ProductsController::class,'store']);
    Route::put('/{id}', [ProductsController::class,'update']);
    Route::delete('/{id}', [ProductsController::class,'destroy']);
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('/bar')->group(function ()
{
    Route::post('/store', [BarsController::class,'store']);
    Route::put('/{id}', [BarsController::class,'update']);
    Route::delete('/{id}', [BarsController::class,'destroy']);
});

