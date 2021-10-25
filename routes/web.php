<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.home');
});

Route::get('/home-page',[FrontendController::class, 'home'])->name('home-page');
Route::get('/job-search-page',[FrontendController::class, 'jobsearchpage'])->name('job-search-page');
Route::get('/task-listing-page',[FrontendController::class, 'tasklistingpage'])->name('task-listing-page');
Route::get('/job-page',[FrontendController::class, 'jobpage'])->name('job-page');
Route::get('/login-page',[FrontendController::class, 'loginpage'])->name('login-page');
Route::get('/error-page',[FrontendController::class, 'errorpage'])->name('error-page');
Route::get('/contact-page',[FrontendController::class, 'contactpage'])->name('contact-page');
Route::get('/single-task-page',[FrontendController::class, 'singletaskpage'])->name('single-task-page');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
