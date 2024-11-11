<?php

use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json(['user' => "Hello new user"]);
    //$request->user();
});

Route::middleware('auth:api')->get('/users', function (Request $request) {
    $user = User::all();
    return response()->json(['user' => $user]);
    //$request->user();
});
