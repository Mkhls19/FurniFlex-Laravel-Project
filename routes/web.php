<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bahanmaterialController;

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
    return view('welcome');
});

// Route bahanmaterial
Route::get('/bahanmaterial', [bahanmaterialController::class, 'index'])->name('bahanmaterial');

Route::get('/bahanmaterial/addform', [bahanmaterialController::class, 'add'])->name('addbahanmaterial');

Route::post('/bahanmaterial/addform', [bahanmaterialController::class, 'insertdata'])->name('insertbahanmaterial');
    
Route::get('/bahanmaterial/updateform/{id}', [bahanmaterialController::class, 'readdata'])->name('readbahanmaterial');

Route::get('/bahanmaterial/allform/{id}', [bahanmaterialController::class, 'viewdata'])->name('viewbahanmaterial');
    
Route::post('/bahanmaterial/updateform/{id}', [bahanmaterialController::class, 'updatedata'])->name('updatebahanmaterial');
    
Route::get('/bahanmaterial/{id}', [bahanmaterialController::class, 'deletedata'])->name('deletebahanmaterial');
