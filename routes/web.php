<?php

use App\Http\Controllers\ComicsController;
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

Route::get('/', [ComicsController::class, "index"])->name("comic.index");

Route::get('/comic/create', [ComicsController::class, "create"])->name("comic.create");

Route::get('/comic/show/{comic}', [ComicsController::class, "show"])->name("comic.show");

Route::post('/comic', [ComicsController::class, "store"])->name("comic.store");

Route::get('/comic/edit/{comimc}', [ComicsController::class, "edit"])->name("comic.edit");

Route::put('/comic/{comic}', [ComicsController::class, "update"])->name("comic.update");

Route::delete("/comic/{comic}", [ComicsController::class, "destroy"])->name("comic.destroy");
