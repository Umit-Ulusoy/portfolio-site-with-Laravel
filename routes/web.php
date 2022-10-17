<?php

use App\Models\Skills;
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

Route::middleware('auth')->group(function ()
{
//Defining routes for admins
Route::get('/admin', [HomeController::class, 'indexAdmins']);
Route::get('/admin/home', [HomeController::class, 'indexAdmins']);
Route::put('/admin/home', [HomeController::class, 'update']);
//defining routes for contact page
Route::get('/admin/contact', [ContactController::class, 'indexAdmins']);
Route::put('/admin/contact', [ContactController::class, 'update']);
//Defining routes for skills page
Route::get('/admin/skills', [SkillsController::class, 'indexAdmins']);
Route::post('/admin/skills', [SkillsController::class, 'store']);
Route::put('/admin/skills', [SkillsController::class, 'deleteOrUpdate']);
});


Route::get('/login', function()
{
    return view('admin.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::get('/', [HomeController::class, 'indexUsers']);
Route::get('/home', [HomeController::class, 'indexUsers']);
Route::get('/skills', [SkillsController::class, 'indexUsers']);
Route::get('/contact', [ContactController::class, 'indexUsers']);