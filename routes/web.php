<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserSessionController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/', [UserSessionController::class,'index'])->name('user_dashboard');
    Route::get('/login', [UserSessionController::class,'login'])->name('login');
    Route::post('/login', [UserSessionController::class,'loginValidate']);
});

Route::get('/home',function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/admin', [AdminController::class,'index']);
    Route::get('/admin/admin', [AdminController::class,'admin'])->middleware('userAkses:admin')->name('dashboard');
    Route::get('/admin/public', [AdminController::class,'public'])->middleware('userAkses:public');
    Route::get('/admin/inputPage', [AdminController::class,'inputPage'])->middleware('userAkses:admin')->name('inputPage');
    Route::get('/admin/create', [AdminController::class,'create'])->middleware('userAkses:admin')->name('create');
    Route::get('/admin/edit/{id}', [AdminController::class,'edit'])->middleware('userAkses:admin')->name('edit');
    Route::get('/admin/delete/{id}', [AdminController::class,'delete'])->middleware('userAkses:admin')->name('delete');
    Route::post('/admin/simpan', [AdminController::class,'postAgenda'])->middleware('userAkses:admin')->name('simpan');
    Route::post('/admin/update/{id}', [AdminController::class,'Update'])->middleware('userAkses:admin')->name('update');
    Route::get('/logout', [UserSessionController::class,'logout']);
});


// Route::get('/', function () {
//     return view('login');
// });
