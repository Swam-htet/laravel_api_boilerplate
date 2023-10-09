<?php

use App\Http\Controllers\ApiController\TodoApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// todo api controller
Route::apiResource("/todos",TodoApiController::class);
