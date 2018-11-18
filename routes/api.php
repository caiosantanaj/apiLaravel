<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/user', 'UserController'); // tdi-api-v2.test/api/user

Route::resource('/userType', 'UserTypeController');

Route::apiResource("/news", "NewsController");

Route::apiResource("/category", "CategoryController");

Route::group(["prefix"=>"news"], function() {
    Route::apiResource("/{news}/reviews", "ReviewController");
});

//Route::group(["prefix"=>"user"], function() {
//    Route::apiResource("/{user}/reviews", "ReviewController");
//});

