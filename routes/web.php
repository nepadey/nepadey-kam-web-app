<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TaskController;
use App\Models\Jobtype;
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
  $job_type= Jobtype::first();
  // echo "<pre>";
  // $jobs=
// $job_type= Jobtype::first();
// dd($job_type->jobs());
$jobs=$job_type->jobs();
  // foreach($job_type->jobs() as $key=>$value){
    // echo $key;
    // echo "<br/>";
    // echo $key;
    // echo "<br/>";
  // }
// print_r($job_type->jobs());
// die;
    // dd($job_type);
    return view('frontend.home')->with(['jobs'=>$jobs,'job_type'=>$job_type]);
});

Route::get('/home-page',[FrontendController::class, 'home'])->name('home-page');
Route::get('/job-search-page',[FrontendController::class, 'jobsearchpage'])->name('job-search-page');
Route::get('/task-listing-page',[FrontendController::class, 'tasklistingpage'])->name('task-listing-page');
Route::get('/job-page',[FrontendController::class, 'jobpage'])->name('job-page');
Route::get('/blog-page',[FrontendController::class, 'blogpage'])->name('blog-page');
Route::get('/login-page',[FrontendController::class, 'loginpage'])->name('login-page');
Route::get('/register-page',[FrontendController::class, 'registerpage'])->name('register-page');
Route::get('/error-page',[FrontendController::class, 'errorpage'])->name('error-page');
Route::get('/user-profile-page',[FrontendController::class, 'userprofilepage'])->name('user-profile-page');
Route::get('/contact-page',[FrontendController::class, 'contactpage'])->name('contact-page');
Route::get('/single-task-page',[FrontendController::class, 'singletaskpage'])->name('single-task-page');
Auth::routes();

Route::resource('job-post', JobController::class);
Route::resource('task-post', TaskController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
