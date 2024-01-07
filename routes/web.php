<?php

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
/*Route::get('/', [HomeController::class, 'home']);
Route::get('/home/about', [HomeController::class, 'about']);*/

Route::get('/', function () {
    return view('home.home');
})->name('app_home');

Route::get('/about', function () {
    return view('home.about');
})->name('app_about');

Route::match(['get', 'post'], '/dashboard', function () {
    return view('home.dashboard');

})->name('app_dashboard');

/*SRoute::match(['get', 'post'], '/login', function(){
   return view ('auth.login');
})->name('app_login');

Route::match(['get', 'post'], '/register', function(){
    return view ('auth.register');
 })->name('app_register');*/
