<?php

use App\Http\Controllers\homePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RecettesController;
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

Route::get('/show', [RecettesController::class, 'index'])->name('show');

Route::get('/add', [RecettesController::class, 'create'])->name('add');

Route::post('/search', [RecettesController::class, 'recipes_for_search'])->name('search');

Route::get('/showOne/{id}', [RecettesController::class, 'showOne'])->name('showOne');




Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/lagout', [LoginController::class, 'logout'])->name('login.logout');

Route::resource(name:'recettes', controller: App\Http\Controllers\RecettesController::class);
Route::resource('profiles',ProfileController::class);
Route::resource('Passager',PassagerController::class);

Route::resource('publication',PublicationController::class);
