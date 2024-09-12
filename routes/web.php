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

Route::get('/', function () {
    return view('client.index');
})->name("index");
Route::get('/about', function () {
    return view('client.about' , ["test" => "giới thiệu"]);
})->name("about");
Route::get('/service', function () {
    return view('client.service');
})->name("service");
Route::get('/menu', function () {
    return view('client.menu');
})->name("menu");
Route::get('/contact', function () {
    return view('client.contact');
})->name("contact");
Route::get('/booking', function () {
    return view('client.booking');
})->name("booking");

Route::get("/test" ,[App\Http\Controllers\MenuController::class , "index"]);

