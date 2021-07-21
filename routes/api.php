<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewProductAdd;
use App\Http\Controllers\Register;


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



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::delete("Delete/{id}",[NewProductAdd::class,'Delete']);
Route::get("generatepdf/{id}", [NewProductAdd::class, 'generatePDF']);
Route::post("upload", [NewProductAdd::class, 'upload']);
Route::post("add",[Register::class,'register']);
Route::post("login",[Register::class,'login']);
Route::put("/Update/{id}",[NewProductAdd::class,'Update_product_details']);

