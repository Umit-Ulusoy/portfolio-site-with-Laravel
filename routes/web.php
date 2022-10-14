<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;

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


//Defining routes for admins
Route::get('/admin', function ()
{
    return view('admin.panel');
})->middleware('auth');


Route::get('/login', function()
{
    return view('admin.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);


Route::get('/panel', function ()
{
    return '<h1>Paneldesiin</h1>';
})->middleware('auth');


Route::get('/', [HomeController::class, 'indexUsers']);
Route::get('/home', [HomeController::class, 'indexUsers']);
Route::get('/skills', [SkillsController::class, 'indexUsers']);
Route::get('/contact', [ContactController::class, 'indexUsers']);