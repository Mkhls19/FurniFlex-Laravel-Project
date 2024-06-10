<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
});

// Route Register 
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route Login 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route bahanmaterial
Route::get('/Material',[MaterialController::class,'index']);
Route::get('/Material-Entry',[MaterialController::class,'create']);
Route::post('/Material-proses',[MaterialController::class,'store']);
Route::get('/Material-Edit/{id}',[MaterialController::class,'edit']);
Route::post('/Material-Update/{id}',[MaterialController::class,'update']);
Route::get('/Material-Delete/{id}',[MaterialController::class,'destroy']);

//Mencetak Data Customer
Route::get('/bahanmaterial-cetak',[MaterialController::class,'downloadpdf']);