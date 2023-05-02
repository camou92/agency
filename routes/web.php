<?php

use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PropertyController as ControllersPropertyController;
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
$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', [Homecontroller::class, 'index']);

Route::get('/biens', [ControllersPropertyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}', [ControllersPropertyController::class, 'show'])->name('property.show')->where([
    'property' => $idRegex,
    'slug' => $slugRegex
]);

Route::post('biens/{property}/contact', [ControllersPropertyController::class, 'contact'])->name('property.contact')->where([
    'property' => $idRegex,
]);

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/images/{path}', [ImageController::class, 'show'])->where('path', '.*');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () use ($idRegex) {
    Route::resource('property', PropertyController::class)->except(['show']);
    Route::resource('option', OptionController::class)->except(['show']);
    Route::delete('picture/{picture}', [PictureController::class, 'destroy'])
        ->name('picture.destroy')
        ->where([
            'picture' => $idRegex,
        ])->can('delete', 'picture');

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
