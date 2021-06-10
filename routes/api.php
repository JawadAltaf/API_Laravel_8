<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\getAPIController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("getdata",[getAPIController::class,'getData']); // simple hand made API Get Method
Route::get('list',[UserController::class,'list']); // Get Method API with Database
Route::post('postApi',[DeviceController::class,'add']); // Post API for inserting data into database
Route::put("putApi",[DeviceController::class,'update']); // Put API for updating data into database
Route::delete("deleteApi/{id}",[DeviceController::class,"delete"]); // Delete API for deleting data from database
Route::get("searchApi/{name}",[DeviceController::class,"search"]); // Search API for searching data from database
Route::post("validationApi",[DeviceController::class,"validation"]);// Validation API before insert data into database