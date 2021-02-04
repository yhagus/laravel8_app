<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/',[PagesController::class, 'home']);
Route::get('/about',[PagesController::class, 'about']);

Route::get('/mahasiswa',[MahasiswaController::class, 'index']);

Route::get('/students',[StudentsController::class, 'index']);
Route::get('/students/create',[StudentsController::class, 'create']);
Route::get('/students/{student}',[StudentsController::class, 'show']);
Route::post('/students',[StudentsController::class, 'store']);

