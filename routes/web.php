<?php
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user-dashboard', function () {
    return view('Dashboard');
})->name('user-dashboard');
Route::get('/user-material-request-form', [App\Http\Controllers\ProjectListController::class, 'index'] )->name('user-material-request-form');
Route::get('/get-material-id', [App\Http\Controllers\ProjectListController::class, 'autofill'] )->name('get-material-id');
Route::resource('projectlist',App\Http\Controllers\ProjectListController::class);
Route::resource('requestlist',App\Http\Controllers\RequestListController::class);


