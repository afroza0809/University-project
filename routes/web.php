<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
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

Route::get('/',[FrontendController::class, 'ShowHomePage']);
Route::get('/blog',[FrontendController::class, 'ShowBlogPage']);
Route::get('/index-2',[FrontendController::class, 'ShowIndex2Page']);
Route::get('/shop',[FrontendController::class, 'ShowShopPage']);
Route::get('/singleblog',[FrontendController::class, 'ShowSingleblogPage']);


Route::post('contact',[ContactController::class, 'store']) -> name('contact.store');