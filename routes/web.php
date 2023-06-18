<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EducationController;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\ProjectsController;

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
    return view('homepage');
});

Route::get('/signup', [CustomAuthController::class,'signup']);
Route::post('signup-admin',[CustomAuthController::class,'signupAdmin'])->name('signup-admin');
Route::get('/login', [CustomAuthController::class,'login']);
Route::post('login-admin',[CustomAuthController::class,'loginAdmin'])->name('login-admin');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('dashboard', [ProjectsController::class, 'dashie']);
Route::get('logout', [CustomAuthController::class, 'logout']);
Route::get('/', [ProjectsController::class, 'index']);
Route::get('addprojects', [ProjectsController::class, 'addProjects']);
Route::post('saveprojects', [ProjectsController::class, 'saveProject'])->name('saveproject');
Route::get('editprojects/{id}', [ProjectsController::class, 'editProject'])->name('editproject');
Route::post('updateprojects', [ProjectsController::class, 'updateProject'])->name('updateproject');
Route::get('deleteprojects/{id}', [ProjectsController::class, 'deleteProject'])->name('deleteproject');