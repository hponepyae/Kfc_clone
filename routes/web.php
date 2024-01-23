<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\userSideController;
use App\Http\Controllers\roleDesicionController;
use App\Http\Controllers\CartControllerController;

Route::redirect('/', 'maincenter');
Route::get('maincenter',[authcontroller::class,'mainPage'])->name('main#page');
Route::get('userlogin',[authcontroller::class,'loginPage'])->name('user#login');
Route::get('userregister',[authcontroller::class,'registerPage'])->name('user#register');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    //deshboard
    Route::get('desicion',[roleDesicionController::class,'desicion'])->name('role#desicion');

        // admin
    Route::group(['prefix' => 'admin','middleware' => 'adminAuth'], function () {
    Route::get('/home1',[CartControllerController::class,'home'])->name('admin#page');
    Route::get('list',[CartControllerController::class,'list'])->name('admin#list');
    Route::get('listUpdate/{id}',[CartControllerController::class,'listupdate'])->name('list#update');
    Route::post('updateList',[CartControllerController::class,'updateList'])->name('update#role');

    //  category
    Route::get('category',[CategoryController::class,'cartStart'])->name('cart#home');
    Route::get('addCate',[CategoryController::class,'addCate'])->name('cata#add');
    Route::post('infoAdd',[CategoryController::class,'infoAdd'])->name('infor#add');
    Route::get('uppdateCate/{id}',[CategoryController::class,'updateCategory'])->name('update#cate');
    Route::post('updateDetail/{id}',[CategoryController::class,'updateDetail'])->name('update#detail');
});

            //  user
        Route::group(['prefix' => 'user','middleware' => 'userAuth'],function () {
        Route::get('home',[userSideController::class,'userHome'])->name('user#home');
        Route::get('userIteam',[userSideController::class,'userIteam'])->name('user#iteam');
        Route::get('userIteamDetail/{iteam}',[userSideController::class,'iteamDetail'])->name('iteam#detail');
});

});




?>
