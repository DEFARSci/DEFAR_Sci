<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EntretienController;

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

Route::get('/', function () {
    return view('welcome');
});


	//Route Entretien

Route::get('/entretiens', [EntretienController::class, 'index']);

Route::get('entretiens/create',[EntretienController::class,'create'] );

Route::post('/entretiens',[EntretienController::class, 'store' ] )->name('create');

Route::get('entretiens/profile/{id}', [EntretienController::class,'show'])->name('show');

Route::get('entretients/{id}', [EntretienController::class, 'edit'])->name('edit_entretien');

Route::put('entretiens/{id}', [EntretienController::class, 'update'])->name('entretiens.update');


Route::delete('entretiens/{id}', [EntretienController::class, 'destroy'])->name('delete_entretien');

