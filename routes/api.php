<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/subjects', [SubjectController::class, 'index']);


use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\ClassController;
use App\Http\Controllers\Api\EnrollmentController;
use App\Http\Controllers\Api\StatementController;
use App\Http\Controllers\Api\CommentController;


Route::middleware('api')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('students', StudentController::class);
//    Route::apiResource('classes', ClassController::class);
//    Route::apiResource('enrollments', EnrollmentController::class);
//    Route::apiResource('statements', StatementController::class);
//    Route::apiResource('comments', CommentController::class);
});
