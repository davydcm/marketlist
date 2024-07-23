<?php

use App\Http\Controllers\MyListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
      return view('home');
});

Route::get('/mylist',[MyListController::class,'index'])->name('mylist');

Route::post('/add',[MyListController::class,'add'])->name('add');

Route::get('/remove/{linha}',[MyListController::class,'remove'])->name('remove');