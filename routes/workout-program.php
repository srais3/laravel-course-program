<?php

use Illuminate\Support\Facades\Route;
use Retrocube\ProgramWorkout\Http\Controllers\WorkoutController;

Route::prefix('api')->group(function () {

    Route::middleware(['api_authorization','api'])->group(function(){

        //Route::middleware(['custom_auth:api'])->group(function(){

            Route::resource('workout',WorkoutController::class);

        //});

    });

});
