<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VisitorController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SiteinfoController;
use App\Http\Controllers\Api\ApiCategoryController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/createvisitor', [VisitorController::class, 'create']);

//contact api 
Route::post('/postcontact' , [ContactController::class, 'create']);

//site info get(about us, refund, address, social links....) 
Route::get('/allsiteinfo' , [SiteinfoController::class, 'index']);


// All category api
Route::get('/allcategory' , [ApiCategoryController::class, 'index']);
