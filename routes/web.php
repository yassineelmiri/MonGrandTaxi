<?php

use App\Http\Controllers\ChauffeursController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homePageController::class, 'index'])->name('homePage');
Route::get('/publications/search', [PublicationController::class, 'search'])->name('publications.search');

Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/lagout', [LoginController::class, 'logout'])->name('login.logout');

route::name('admin.')->prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/user', 'user')->name('user');
        Route::get('/chauffeur', 'chauffeur')->name('chauffeur');
        Route::get('/passager', 'passager')->name('passager');
    });
});
Route::resource('admin', AdminController::class);
Route::resource('profiles', ProfileController::class);
Route::resource('Passager', PassagerController::class);
Route::resource('chauffeurs', ChauffeursController::class);
Route::resource('publications', PublicationController::class);

Route::get('/Print/{chauffeur}', [AdminController::class, 'printeview'])->name('printeview');

