<?php

use App\Http\Controllers\ChauffeursController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [homePageController::class, 'index'])->name('homePage');
Route::get('/publications/search', [PublicationController::class, 'search'])->name('publications.search');



Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/lagout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/chauffeur', [AdminController::class, 'chauffeur'])->name('admin.chauffeur');
Route::get('/admin/passager', [AdminController::class, 'passager'])->name('admin.passager');

Route::resource('admin', AdminController::class);
Route::resource('profiles', ProfileController::class);
Route::resource('Passager', PassagerController::class);
Route::resource('chauffeurs', ChauffeursController::class);

Route::resource('publications', PublicationController::class);
