<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/services',[WebsiteController::class,'service'])->name('service');
Route::get('/service/{slug}',[WebsiteController::class,'serviceDetails'])->name('serviceDetails');
Route::get('/projects',[WebsiteController::class,'project'])->name('project');
//Route::get('/project/{slug}',[WebsiteController::class,'projectDetails'])->name('projectDetails');
Route::get('/blogs',[WebsiteController::class,'blog'])->name('blog');
Route::get('/blog/{slug}',[WebsiteController::class,'blogDetails'])->name('blogDetails');
Route::get('/about-us',[WebsiteController::class,'about'])->name('about');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact');
Route::post('/order-form-submit',[WebsiteController::class,'orderService'])->name('order.form.submit');
Route::post('/contact-form-submit',[WebsiteController::class,'contactFormSubmit'])->name('contact.form.submit');
