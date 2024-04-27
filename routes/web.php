<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;


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

// Route::get('/', function () {
//     return view('home.index');
// });


route::get('/',[AuthController::class,'login']);
route::get('/',[AuthController::class,'login']);

route::get('/home',[MaterielController::class,'index']);
route::get('/about',[MaterielController::class,'indix']);
route::get('/contact',[MaterielController::class,'indrx']);
route::get('/liste',[MaterielController::class,'indnx']);
route::get('/ajouter',[MaterielController::class,'indpx']);
route::post('/ajouter/traitement',[MaterielController::class,'indxx']);
route::get('/liste',[MaterielController::class,'data']);
route::get('/update/{id}',[MaterielController::class,'update']);
route::put('/update/traitement',[MaterielController::class,'updatex']);
route::get('/delete/{id}',[MaterielController::class,'delete']);
Route::get('datax', [MaterielController::class, 'datax'])->name('datax');
// Route::get('liste', [MaterielController::class, 'selecto'])->name('liste');
Route::get('standards', [MaterielController::class, 'getStandard'])->name('standards');
Route::get('informations/records', [MaterielController::class, 'records'])->name('informations/records');




Route::group(['middleware' => 'guest'], function () {
    Route::get('/Register', [AuthController::class, 'register'])->name('register');
    Route::post('/Register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [MaterielController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});




