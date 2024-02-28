<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Event;
use App\Http\Controllers\Reserve;


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
    return view('welcome');
});
//Users

Route::get('/events', function(){
    return view('users/events', ['title'=>'events Page']);
});


Route::get('/reserve', function(){
    return view('users/reservetickets', ['title'=>'reserve Page']);
});

//admin
Route::get('/adminlogin', function(){
    return view('admin/adminlogin', ['title'=>'Adminlogin Page']);
});
Route::get('/edit', function(){
    return view('admin/edit', ['title'=>'edit Page']);
});
Route::get('/dashboard', function(){
    return view('admin/admindashboard', ['title'=>'Dashboard Page']);
})->middleware('isLoggedIn');
Route::post('login-admin',[Authentication::class,'loginAdmin'])->name('login-admin');
Route::get('/logout',[Authentication::class,'logout']);

//Events
Route::post('add-event',[Event::class,'addEvent'])->name('add-event');
Route::get('/dashboard',[Event::class,'viewEvents'])->middleware('isLoggedIn');
Route::get('/dashboard/delete/{id}',[Event::class,'delete']);
Route::get('/edit/{id}',[Event::class,'edit']);
Route::put('/update-data/{id}',[Event::class,'update']);

Route::get('/events',[Event::class,'displayEvents']);


//Reservation
Route::get('/reserve/{id}',[Reserve::class,'reserve']);
Route::match(['post', 'put'],'make-reserve',[Reserve::class,'makeReserve'])->name('make-reserve');