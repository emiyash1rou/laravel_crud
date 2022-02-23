<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitarsController;
use Illuminate\Support\Facades\Auth;
 

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
Route::resource('guitars',GuitarsController::class);
Route::get('/signout', function() {
    Auth::logout();
    return redirect('/');
    })->name('signout');
    Route::get('/admin_dashboard', function() {
       return redirect()->route('guitars.index');
        
        })->middleware('auth')->name('admin_dashboard');
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/about',[HomeController::class,'about'])->name('home.about');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // Get the currently authenticated user...
$user = Auth::user();
 
// Get the currently authenticated user's ID...
$id = Auth::id();
echo "current user:".$user;
return redirect('/guitars');
    // return view('dashboard');
})->name('dashboard');
