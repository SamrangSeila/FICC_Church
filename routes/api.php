<?php

use App\Models\Membertask;
use Illuminate\Http\Request;
use App\Models\Otherformember;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\UsertypeController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\MembertaskController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\BlogcategoryController;
use App\Http\Controllers\OtherformemberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// about us
Route::get('/aboutus', [AboutusController::class, 'store']);

// blog category 
Route::get('/blogcategory', [BlogcategoryController::class, 'store']);
Route::get('/showBlogCategoryById/{id}', [BlogcategoryController::class, 'showBlogCategoryById']);

// blog
Route::get('/blog', [BlogController::class, 'store']);
Route::get('/showbyblogcategoryid/{id}', [BlogController::class, 'showByBlogCategoryId']);

// contact us  
Route::get('/contactus', [ContactusController::class, 'store']);
Route::post('/contactus', [ContactusController::class, 'create']);

// event  
Route::get('/event', [EventController::class, 'store']);

// member task  
Route::get('/membertask', [MembertaskController::class, 'store']);

//other for member 
Route::get('/otherformember', [OtherformemberController::class, 'store']);

// social media
Route::get('/socialmedia', [SocialmediaController::class, 'store']);

// User type
Route::get('/usertype', [UsertypeController::class, 'store']);

// User 
Route::get('/member', [HomeController::class, 'store']);

Route::middleware('auth:api')->get('/current-user', [UserController::class, 'getCurrentUser']);


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
