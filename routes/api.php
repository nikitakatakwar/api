<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("data",[dummyController::class,'getData']);
Route::get("list",[dummyController::class,'list']);
Route::post("add",[dummyController::class,'add']);
Route::put("update/{id}",[dummyController::class,'update']);
