<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

//COMMON RESOUCE ROUTES
//Index- show all listings
//show- show single listing
//create- show form to create new listing
//update- update a listing
//destroy- Delete a listing

//All listings
Route::get('/', [ListingController::class, 'index']);



//database connection
Route::get('/dbconn', function(){
    return view('dbconn');
});

//Create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store listing data
Route::post('/listings',[ListingController::class, "store"])->middleware('auth');

// show edit form
Route::get('listings/{listing}/edit',[ListingController::class, "edit"])->middleware('auth');

//Edit Submit Update
Route::put('listings/{listing}',[ListingController::class, 'update'])->middleware('auth');

//Delete a listing
Route::delete('listings/{listing}',[ListingController::class, 'destroy'])->middleware('auth');

//Single listing
Route::get('/listings/{listing}',[ListingController::class, "show"] );

//show Register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create a new user
Route::post('/users', [UserController::class, 'store']);

//log user out
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

//user login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


