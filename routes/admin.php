<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Roles\RoleController;

Route::get('/', [HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', [HomeController::class,'index'])->name('dashboard');


    Route::get('/roles', [RoleController::class,'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class,'create'])->name('roles.create');
    Route::post('/roles/store', [RoleController::class,'store'])->name('roles.store');
    Route::get('/roles/show/{role}', [RoleController::class,'show'])->name('roles.show');
    Route::get('/roles/edit/{role}', [RoleController::class,'edit'])->name('roles.edit');
    Route::post('/roles/update/{role}', [RoleController::class,'update'])->name('roles.update');
    Route::post('/roles/destroy/{role}', [RoleController::class,'destroy'])->name('roles.destroy');

});
