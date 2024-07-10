<?php

use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('collaborator/listar',[CollaboratorController::class,'index'])->name('collaborator.index');
Route::get('collaborator/create',[CollaboratorController::class,'create']);
Route::post('collaborator/store', [CollaboratorController::class,'store'])->name('collaborators.store');
Route::get('collaborator/{collaborator}',[CollaboratorController::class,'show'])->name('collaborator.show');
Route::put('collaborator/{collaborator}',[CollaboratorController::class,'update'])->name('collaborator.update');
Route::delete('collaborator/{collaborator}',[CollaboratorController::class,'destroy'])->name('collaborator.destroy');
Route::get('collaborator/{collaborator}/editar',[CollaboratorController::class,'edit'])->name('collaborator.edit');



Route::get('customer/listar',[CustomerController::class,'index'])->name('customer.index');
Route::get('customer/create',[CustomerController::class,'create']);
Route::post('customer/store', [CustomerController::class,'store'])->name('customers.store');
Route::get('customer/{customer}',[CustomerController::class,'show'])->name('customer.show');
Route::put('customer/{customer}',[CustomerController::class,'update'])->name('customer.update');
Route::delete('customer/{customer}',[CustomerController::class,'destroy'])->name('customer.destroy');
Route::get('customer/{customer}/editar',[CustomerController::class,'edit'])->name('customer.edit');



