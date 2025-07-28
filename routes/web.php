<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/dettaglio',[PageController::class, 'dettaglio'])->name('dettaglio');

//Route::get('/blog/{dettaglio}', [PageController::class, 'blogdettaglio'])->name('dblogdettaglio');


// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
