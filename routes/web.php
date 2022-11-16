<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Таблица маршрутизации ресурсного контроллера ChirpController содержит следующие маршруты и методы (RESTfull API):
 *
 * Verb             URI	                        Action	    Route Name
 * GET              /chirps	                    index	    chirps.index
 * POST             /chirps	                    store	    chirps.store
 * GET	            /chirps/{chirp}/edit	    edit	    chirps.edit
 * PUT/PATCH        /chirps/{chirp}	            update	    chirps.update
 * DELETE	        /chirps/{chirp}	            destroy	    chirps.destroy
 */

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';