<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// 1 - Route Statica che passa la stringa "ciao ... ciao"
// Route::get('/', function () {
//     return "ciao... ciao";
// });

// 2 - Route Statica che apre la view welcome
// Route::get('/', function () {
//     return view('welcome');
// });

// 3 - Route statica che passa il parametro al controller
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
//Route::get('/blogdettaglio',[PageController::class, 'dettaglio'])->name('dettaglio');



Route::get('/blogdettaglio', function () {
         return view('blogdettaglio'); });


// 4 -Route parametrica che passa il parametro al controller
//Route::get('/blog/{dettaglio}', [PageController::class, 'blogdettaglio'])->name('blogdettaglio');


