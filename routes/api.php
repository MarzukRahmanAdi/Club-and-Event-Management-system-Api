<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clubController;
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


// Auth
Route::prefix('auth')->group(function () {
	Route::post('signup', 'App\Http\Controllers\Api\Auth\AuthController@signup')->name('auth.signup');
	Route::post('login', 'App\Http\Controllers\Api\Auth\AuthController@login')->name('auth.login');
	Route::post('logout', 'App\Http\Controllers\Api\Auth\AuthController@logout')->middleware('auth:sanctum')->name('auth.logout');
	Route::get('user', 'App\Http\Controllers\Api\Auth\AuthController@getAuthenticatedUser')->middleware('auth:sanctum')->name('auth.user');

	Route::post('/password/email', 'App\Http\Controllers\Api\Auth\AuthController@sendPasswordResetLinkEmail')->middleware('throttle:5,1')->name('password.email');
	Route::post('/password/reset', 'App\Http\Controllers\Api\Auth\AuthController@resetPassword')->name('password.reset');
});

Route::prefix("club")->group(function () {
	Route::post("/update/{id}", [clubController::class, 'updateClub' ])->middleware('auth:sanctum');
	Route::get("/get/{id}", [clubController::class, 'getClub' ]);
	Route::get("get", [clubController::class, 'getAllClubs' ]);

});


Route::prefix("event")->group(function () {
	Route::post("/add/{id}", [clubController::class, 'addEvent' ])->middleware('auth:sanctum');
	Route::post("/update/{id}", [clubController::class, 'updateEvent' ])->middleware('auth:sanctum');

	Route::get("/get/{id}", [clubController::class, 'getEvents' ]);
	Route::get("get", [clubController::class, 'getAllEvents' ]);
	Route::delete("/delete/{id}", [clubController::class, 'deleteEvent' ])->middleware('auth:sanctum');
});


Route::prefix("member")->group(function () {
	Route::post("/add/{id}", [clubController::class, 'addMember' ])->middleware('auth:sanctum');
	Route::get("/get/{id}", [clubController::class, 'getMembers' ]);
	Route::get("get", [clubController::class, 'getAllMembers' ]);
	Route::post("/change/{id}", [clubController::class, 'changeMemberOrder' ])->middleware('auth:sanctum');
	Route::post("/update/{id}", [clubController::class, 'updateMember' ])->middleware('auth:sanctum');
	Route::delete("/delete/{id}", [clubController::class, 'deleteMember' ])->middleware('auth:sanctum');

});
