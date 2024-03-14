<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\MeetingTypeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\QuoteTypeController;

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
    return view('auth.login');
});
Route::get('/password/reset', function () {
    return view('auth.reset');
});

Route::resource('leaders', LeaderController::class);
Route::resource('participants', ParticipantController::class);
Route::resource('meetingtypes', MeetingTypeController::class);
Route::resource('programs', ProgramController::class);
Route::resource('quotes', QuoteController::class);
Route::resource( 'quotetypes', QuoteTypeController::class);

// This will disable the registration routes
Route::get('/register', function () { abort(404); }); // Shows a 404 error page
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    
});
