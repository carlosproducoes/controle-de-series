<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

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
    return redirect(route('series.index'));
});

Route::controller(SeriesController::class, '/series')->group(function () {
    Route::get("/series", "index")->name("series.index");
    Route::get("/series/criar", "create")->name("series.create");
    Route::post("/series", "store")->name("series.store");
    Route::get("/series/{serie}/edit", "edit")->name("series.edit");
    Route::put("/series/{serie}", "update")->name("series.update");
    Route::delete("/series/deletar/{serie}", "destroy")->name("series.destroy");
});