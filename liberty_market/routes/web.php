<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HomeHeadingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    //Manage Explore
    Route::get('/admin/explore', [ExploreController::class, 'index'])->name('admin.explore');
    Route::get('/admin/explore/create', [ExploreController::class, 'create'])->name('admin.explore.create');
    Route::POST('/admin/explore/store', [ExploreController::class, 'store'])->name('admin.explore.store');
    Route::get('/admin/explore/edit/{id}/', [ExploreController::class, 'edit'])->name('admin.explore.edit');
    Route::POST('/admin/explore/update/{id}/', [ExploreController::class, 'update'])->name('admin.explore.update');
    Route::GET('/admin/explore/delete/{id}/', [ExploreController::class, 'delete'])->name('admin.explore.delete');

    //Manage Nft
     Route::get('/admin/nft', [NftController::class, 'index'])->name('admin.nft');

    //Manage Home Heading
    Route::get('/admin/home-heading', [HomeHeadingController::class, 'index'])->name('admin.home-heading');
      Route::get('/admin/home-heading/edit/{id}/', [HomeHeadingController::class, 'edit'])->name('admin.home-heading.edit');
      Route::get('/admin/home-heading/update/{id}/', [HomeHeadingController::class, 'update'])->name('admin.home-heading.update');
    //Manage User
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
    Route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::POST('/admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/admin/user/edit/{id}/', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::POST('/admin/user/update/{id}/', [UserController::class, 'update'])->name('admin.user.update');
    Route::get('/admin/user/delete/{id}/', [UserController::class, 'delete'])->name('admin.user.delete');
    Route::get('/admin/user/view/{id}/', [UserController::class, 'Read'])->name('admin.user.view');

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


// Route::get('/dasboard', function () {
//     return view('layouts.admin.admin-app');
// });
