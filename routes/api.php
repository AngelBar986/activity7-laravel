<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoboticsKitController;

// USERS
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// GROUPS
Route::get('/groups', [GroupController::class, 'index']);
Route::post('/groups', [GroupController::class, 'store']);
Route::get('/groups/{id}', [GroupController::class, 'show']);
Route::put('/groups/{id}', [GroupController::class, 'update']);
Route::delete('/groups/{id}', [GroupController::class, 'destroy']);

// COURSES
Route::get('/courses', [CourseController::class, 'index']);
Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::put('/courses/{id}', [CourseController::class, 'update']);
Route::delete('/courses/{id}', [CourseController::class, 'destroy']);

// ROBOTICS KITS
Route::get('/robotics-kits', [RoboticsKitController::class, 'index']);
Route::post('/robotics-kits', [RoboticsKitController::class, 'store']);
Route::get('/robotics-kits/{id}', [RoboticsKitController::class, 'show']);
Route::put('/robotics-kits/{id}', [RoboticsKitController::class, 'update']);
Route::delete('/robotics-kits/{id}', [RoboticsKitController::class, 'destroy']);
